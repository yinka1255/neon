<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use Session;
use Redirect;
use App\User;
use App\Permission;
use App\Product;
use App\Inventory;
use App\Category;
use App\Admin;
use App\Order;
use App\Vendor;
use App\Customer;
use App\State;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use Mail;

class AdminsController extends Controller{

    public function index(){
    
        $user = Auth::user();
        if(!$user || $user->type != 1){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $loggedInUser = Admin::join("users", "admins.user_id", "=", "users.id")
                        ->where("admins.user_id", $user->id)
                        ->select("admins.*", "users.id as user_id", "users.status as user_status")->first();
        return view('admin/index')->with(["loggedInUser"=>$loggedInUser]);
    }

    public function admins(){
    
        $user = Auth::user();
        if(!$user || $user->type != 1){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $loggedInUser = Admin::join("users", "admins.user_id", "=", "users.id")
                        ->where("admins.user_id", $user->id)
                        ->select("admins.*", "users.id as user_id", "users.status as user_status")->first();
        if($this->checkPermission($loggedInUser, "admin_1") == false){
            Session::flash('error', 'Sorry! you do not have permission to access this feature');
            return back();
        }
        $admins = Admin::join("users", "admins.user_id", "=", "users.id")
                    ->orderBy("users.id", "desc")
                    ->select("admins.*", "users.id as user_id", "users.status as user_status")->get();

        return view('admin/admins')->with(["admins"=>$admins, "loggedInUser"=>$loggedInUser]);
    }  

    public function customers(){
    
        $user = Auth::user();
        if(!$user || $user->type != 1){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $loggedInUser = Admin::join("users", "admins.user_id", "=", "users.id")
                        ->where("admins.user_id", $user->id)
                        ->select("admins.*", "users.id as user_id", "users.status as user_status")->first();
        if($this->checkPermission($loggedInUser, "customer_1") == false){
            Session::flash('error', 'Sorry! you do not have permission to access this feature');
            return back();
        }
        $customers = Customer::join("users", "customers.user_id", "=", "users.id")
                    ->orderBy("users.id", "desc")
                    ->select("customers.*", "users.id as user_id", "users.status as user_status")->get();

        return view('admin/customers')->with(["customers"=>$customers, "loggedInUser"=>$loggedInUser]);
    }  

    public function deactivateCustomer($id){
        $user = Auth::user();
        if(!$user || $user->type != 1){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $loggedInUser = Admin::join("users", "admins.user_id", "=", "users.id")
                        ->where("admins.user_id", $user->id)
                        ->select("admins.*", "users.id as user_id", "users.status as user_status")->first();
        if($this->checkPermission($loggedInUser, "customer_3") == false){
            Session::flash('error', 'Sorry! you do not have permission to access this feature');
            return back();
        }

        $user = User::where("id", $id)->first();

        $user->status = 2;

        $user->save();

        Session::flash('success', 'Congrats, User has been deactivated successfully');
        return back();
    }  
    public function activateCustomer($id){
        $user = Auth::user();
        if(!$user || $user->type != 1){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $loggedInUser = Admin::join("users", "admins.user_id", "=", "users.id")
                        ->where("admins.user_id", $user->id)
                        ->select("admins.*", "users.id as user_id", "users.status as user_status")->first();
        if($this->checkPermission($loggedInUser, "customer_3") == false){
                Session::flash('error', 'Sorry! you do not have permission to access this feature');
                return back();
            }
        $user = User::where("id", $id)->first();

        $user->status = 1;

        $user->save();

        Session::flash('success', 'Congrats, User has been activated successfully');
        return back();
    }  

    public function checkPermission($loggedInUser, $module){
        $checkPermission = Permission::where("admin_id", $loggedInUser->id)->first();
        if(count($checkPermission)<1){
            return false;
        }
        if(count($checkPermission)>0 && $checkPermission->$module != "on"){
            return false;
        }else{
            return true;
        }
    }

    public function newAdmin(){
        $user = Auth::user();
        if(!$user || $user->type != 1){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $loggedInUser = Admin::join("users", "admins.user_id", "=", "users.id")
                        ->where("admins.user_id", $user->id)
                        ->select("admins.*", "users.id as user_id", "users.status as user_status")->first();
        if($this->checkPermission($loggedInUser, "admin_2") == false){
            Session::flash('error', 'Sorry! you do not have permission to access this feature');
            return back();
        }
        return view('admin/new_admin')->with(["loggedInUser"=>$loggedInUser]);
    }
    public function editAdmin($id){
        $user = Auth::user();
        if(!$user || $user->type != 1){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $loggedInUser = Admin::join("users", "admins.user_id", "=", "users.id")
                        ->where("admins.user_id", $user->id)
                        ->select("admins.*", "users.id as user_id", "users.status as user_status")->first();
        if($this->checkPermission($loggedInUser, "admin_3") == false){
                            Session::flash('error', 'Sorry! you do not have permission to access this feature');
                            return back();
                        }
        $admin = Admin::where("id", $id)->first();
        return view('admin/edit_admin')->with(["admin"=>$admin, "loggedInUser"=>$loggedInUser]);
    }

    public function deactivateAdmin($id){
        $user = Auth::user();
        if(!$user || $user->type != 1){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $loggedInUser = Admin::join("users", "admins.user_id", "=", "users.id")
                        ->where("admins.user_id", $user->id)
                        ->select("admins.*", "users.id as user_id", "users.status as user_status")->first();
        if($this->checkPermission($loggedInUser, "admin_3") == false){
            Session::flash('error', 'Sorry! you do not have permission to access this feature');
            return back();
        }

        $user = User::where("id", $id)->first();

        $user->status = 2;

        $user->save();

        Session::flash('success', 'Congrats, User has been deactivated successfully');
        return back();
    }  
    public function activateAdmin($id){
        $user = Auth::user();
        if(!$user || $user->type != 1){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $loggedInUser = Admin::join("users", "admins.user_id", "=", "users.id")
                        ->where("admins.user_id", $user->id)
                        ->select("admins.*", "users.id as user_id", "users.status as user_status")->first();
        if($this->checkPermission($loggedInUser, "admin_3") == false){
                Session::flash('error', 'Sorry! you do not have permission to access this feature');
                return back();
            }
        $user = User::where("id", $id)->first();

        $user->status = 1;

        $user->save();

        Session::flash('success', 'Congrats, User has been activated successfully');
        return back();
    }  
    
    public function saveAdmin(Request $request){
        $user = new User;
        $user->email = $request->input("email");
        $password = time();
        $user->password = bcrypt($password);
        $user->type = 1;
        $user->status = 1;
        if($user->save()){
            $admin = new Admin;
            $admin->user_id = $user->id;
            $admin->name = $request->input("name");
            $admin->phone = $request->input("phone");
            $admin->email = $request->input("email");
            $admin->status = 1;
            
            if($admin->save()){
                $this->adminMail($request->input("email"), $request->input("name"), $password);
                Session::flash('success', 'Congrats, admin account has been created successfully');
                return redirect('/admin/admins');
            }else{
                Session::flash('error', 'Sorry! An error occured while trying to create account');
                return back();
            }    
        }else{
            Session::flash('error', 'Sorry! An error occured while trying to create account');
                return back();
        }    
    }  

    public function updateAdmin(Request $request){
    
        $admin = Admin::where("user_id", $request->input("user_id"))->first();

        $admin->name = $request->input("name");

        $admin->phone = $request->input("phone");

        $admin->address = $request->input("address");

        $admin->email = $request->input("email");

        $user = User::where("id", $request->input("user_id"))->first();

        $user->username = $request->input("email");

        if($request->hasFile('image')){
            $image = $request->file('image');

            $imageName  = time() . '.' . $image->getClientOriginalExtension();
            
            $path = public_path()."/images/users/";
            
            $image->move($path, $imageName);

            $admin->image = $imageName;
        }    

        
        if($admin->save()){

            $user->save();

            return response()->json(['success' => true, 'message' => "Profile updated succeessfully"], 200);
        }else{
            return response()->json(['error' => true, 'message' => "An error occured while trying to update profile."], 200);
        }    
    }  

    public function savePermissions(Request $request){
        $user = Auth::user();
        if(!$user || $user->type != 1){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $loggedInUser = Admin::join("users", "admins.user_id", "=", "users.id")
                        ->where("admins.user_id", $user->id)
                        ->select("admins.*", "users.id as user_id", "users.status as user_status")->first();
        $this->checkPermission($loggedInUser, "admin3");
        $permission = Permission::where("admin_id", $request->input("id"))->first();
        if($permission == null){
            $permission = new Permission;
        }
        $permission->admin_id = $request->input("id");
        $permission->category_1 = $request->input("category_1");
        $permission->category_2 = $request->input("category_2");
        $permission->category_3 = $request->input("category_3");
        $permission->product_1 = $request->input("product_1");
        $permission->product_2 = $request->input("product_2");
        $permission->product_3 = $request->input("product_3");
        $permission->inventory_1 = $request->input("inventory_1");
        $permission->inventory_2 = $request->input("inventory_2");
        $permission->inventory_3 = $request->input("inventory_3");
        $permission->order_1 = $request->input("order_1");
        $permission->order_2 = $request->input("order_2");
        $permission->order_3 = $request->input("order_3");
        $permission->admin_1 = $request->input("admin_1");
        $permission->admin_2 = $request->input("admin_2");
        $permission->admin_3 = $request->input("admin_3");
        $permission->customer_1 = $request->input("customer_1");
        $permission->customer_2 = $request->input("customer_2");
        $permission->customer_3 = $request->input("customer_3");
        $permission->report_1 = $request->input("report_1");
        $permission->updated_by = $loggedInUser->id;

        if($permission->save()){
            Session::flash('success', 'Congrats! Permissions has been set successfully');
            return back();
        }else{
            Session::flash('error', 'Sorry! An error occured while trying to create account');
            return back();
        }    
    }
    public function categories(){
    
        $user = Auth::user();
        if(!$user || $user->type != 1){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $loggedInUser = Admin::join("users", "admins.user_id", "=", "users.id")
                        ->where("admins.user_id", $user->id)
                        ->select("admins.*", "users.id as user_id", "users.status as user_status")->first();
        if($this->checkPermission($loggedInUser, "category_1") == false){
            Session::flash('error', 'Sorry! you do not have permission to access this feature');
            return back();
        }
        $categories = Category::where("status", 1)->get();

        return view('admin/categories')->with(["categories"=>$categories, "loggedInUser"=>$loggedInUser]);
    }  

    public function newCategory(){
        $user = Auth::user();
        if(!$user || $user->type != 1){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $loggedInUser = Admin::join("users", "admins.user_id", "=", "users.id")
                        ->where("admins.user_id", $user->id)
                        ->select("admins.*", "users.id as user_id", "users.status as user_status")->first();
        if($this->checkPermission($loggedInUser, "category_2") == false){
            Session::flash('error', 'Sorry! you do not have permission to access this feature');
            return back();
        }
        return view('admin/new_category')->with(["loggedInUser"=>$loggedInUser]);
    }
    public function editCategory($id){
        $user = Auth::user();
        if(!$user || $user->type != 1){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $loggedInUser = Admin::join("users", "admins.user_id", "=", "users.id")
                        ->where("admins.user_id", $user->id)
                        ->select("admins.*", "users.id as user_id", "users.status as user_status")->first();
        if($this->checkPermission($loggedInUser, "category_3") == false){
                            Session::flash('error', 'Sorry! you do not have permission to access this feature');
                            return back();
                        }
        $category = Category::where("id", $id)->first();
        return view('admin/edit_category')->with(["category"=>$category, "loggedInUser"=>$loggedInUser]);
    }

    public function saveCategory(Request $request){
        $user = Auth::user();
        if(!$user || $user->type != 1){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $loggedInUser = Admin::join("users", "admins.user_id", "=", "users.id")
                        ->where("admins.user_id", $user->id)
                        ->select("admins.*", "users.id as user_id", "users.status as user_status")->first();
        if($this->checkPermission($loggedInUser, "category_2") == false){
            Session::flash('error', 'Sorry! you do not have permission to access this feature');
            return back();
        }
        $category = new Category;
        $category->name = $request->input("name");
        $category->status = 1;
        if($category->save()){
            Session::flash('success', 'Congrats, category has been created successfully');
            return redirect('/admin/categories');
        }else{
            Session::flash('error', 'Sorry! An error occured while trying to create category');
            return back();
        }    
    }  
    public function updateCategory(Request $request){
        $user = Auth::user();
        if(!$user || $user->type != 1){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $loggedInUser = Admin::join("users", "admins.user_id", "=", "users.id")
                        ->where("admins.user_id", $user->id)
                        ->select("admins.*", "users.id as user_id", "users.status as user_status")->first();
        if($this->checkPermission($loggedInUser, "category_3") == false){
                            Session::flash('error', 'Sorry! you do not have permission to access this feature');
                            return back();
                        }
        $category =  Category::where("id", $request->input("id"))->first();
        $category->name = $request->input("name");
        if($category->save()){
            Session::flash('success', 'Congrats, category has been updated successfully');
            return redirect('/admin/categories');
        }else{
            Session::flash('error', 'Sorry! An error occured while trying to update category');
            return back();
        }    
    }  
    public function deleteCategory($id){
        $user = Auth::user();
        if(!$user || $user->type != 1){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $loggedInUser = Admin::join("users", "admins.user_id", "=", "users.id")
                        ->where("admins.user_id", $user->id)
                        ->select("admins.*", "users.id as user_id", "users.status as user_status")->first();
        if($this->checkPermission($loggedInUser, "category_3") == false){
                            Session::flash('error', 'Sorry! you do not have permission to access this feature');
                            return back();
                        }
        $category =  Category::where("id", $id)->first();
        $category->status = 2;
        if($category->save()){
            Session::flash('success', 'Congrats, category has been updated successfully');
            return redirect('/admin/categories');
        }else{
            Session::flash('error', 'Sorry! An error occured while trying to update category');
            return back();
        }    
    }  

    public function products(){
    
        $user = Auth::user();
        if(!$user || $user->type != 1){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $loggedInUser = Admin::join("users", "admins.user_id", "=", "users.id")
                        ->where("admins.user_id", $user->id)
                        ->select("admins.*", "users.id as user_id", "users.status as user_status")->first();
        if($this->checkPermission($loggedInUser, "product_1") == false){
            Session::flash('error', 'Sorry! you do not have permission to access this feature');
            return back();
        }
        $products = Product::join("categories", "categories.id", "=", "products.category_id")
                            ->where("products.status", 1)
                            ->select("products.*", "categories.id as category_id", "categories.name as category_name")
                            ->get();

        return view('admin/products')->with(["products"=>$products, "loggedInUser"=>$loggedInUser]);
    }  

    public function newProduct(){
        $user = Auth::user();
        if(!$user || $user->type != 1){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $loggedInUser = Admin::join("users", "admins.user_id", "=", "users.id")
                        ->where("admins.user_id", $user->id)
                        ->select("admins.*", "users.id as user_id", "users.status as user_status")->first();
        if($this->checkPermission($loggedInUser, "product_2") == false){
            Session::flash('error', 'Sorry! you do not have permission to access this feature');
            return back();
        }
        $categories = Category::where("status", 1)->get();
        return view('admin/new_product')->with(["categories"=>$categories,"loggedInUser"=>$loggedInUser]);
    }
    public function editProduct($id){
        $user = Auth::user();
        if(!$user || $user->type != 1){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $loggedInUser = Admin::join("users", "admins.user_id", "=", "users.id")
                        ->where("admins.user_id", $user->id)
                        ->select("admins.*", "users.id as user_id", "users.status as user_status")->first();
        if($this->checkPermission($loggedInUser, "product_3") == false){
                            Session::flash('error', 'Sorry! you do not have permission to access this feature');
                            return back();
                        }
        $categories = Category::where("status", 1)->get();
        $product = Product::where("id", $id)->first();
        return view('admin/edit_product')->with(["categories"=>$categories, "product"=>$product, "loggedInUser"=>$loggedInUser]);
    }

    public function saveProduct(Request $request){
        $user = Auth::user();
        if(!$user || $user->type != 1){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $loggedInUser = Admin::join("users", "admins.user_id", "=", "users.id")
                        ->where("admins.user_id", $user->id)
                        ->select("admins.*", "users.id as user_id", "users.status as user_status")->first();
        if($this->checkPermission($loggedInUser, "product_2") == false){
            Session::flash('error', 'Sorry! you do not have permission to access this feature');
            return back();
        }
        $product = new Product;
        $product->name = $request->input("name");
        $product->category_id = $request->input("category_id");
        $product->description = $request->input("description");
        $product->status = 1;
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName  = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path()."/images/products/";
            $image->move($path, $imageName);
            $product->image = $imageName;
        }    
        list($width, $height) = getimagesize($path.$imageName);
            if($width != 750 || $height!=570){
                Session::flash('error', 'Sorry Image size must be 750px * 570px');
                return back();
            }
        if($product->save()){
            Session::flash('success', 'Congrats, product has been created successfully');
            return redirect('/admin/products');
        }else{
            Session::flash('error', 'Sorry! An error occured while trying to create product');
            return back();
        }    
    }  
    public function updateProduct(Request $request){
        $user = Auth::user();
        if(!$user || $user->type != 1){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $loggedInUser = Admin::join("users", "admins.user_id", "=", "users.id")
                        ->where("admins.user_id", $user->id)
                        ->select("admins.*", "users.id as user_id", "users.status as user_status")->first();
        if($this->checkPermission($loggedInUser, "product_3") == false){
                            Session::flash('error', 'Sorry! you do not have permission to access this feature');
                            return back();
                        }
        $product =  Product::where("id", $request->input("id"))->first();
        $product->name = $request->input("name");
        $product->category_id = $request->input("category_id");
        $product->description = $request->input("description");
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName  = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path()."/images/products/";
            $image->move($path, $imageName);
            $product->image = $imageName;
            list($width, $height) = getimagesize($path.$imageName);
            if($width != 750 || $height!=570){
                Session::flash('error', 'Sorry Image size must be 750px * 570px');
                return back();
            }
        }    
        
        
        if($product->save()){
            Session::flash('success', 'Congrats, product has been updated successfully');
            return redirect('/admin/products');
        }else{
            Session::flash('error', 'Sorry! An error occured while trying to update product');
            return back();
        }    
    }  
    public function deleteProduct($id){
        $user = Auth::user();
        if(!$user || $user->type != 1){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $loggedInUser = Admin::join("users", "admins.user_id", "=", "users.id")
                        ->where("admins.user_id", $user->id)
                        ->select("admins.*", "users.id as user_id", "users.status as user_status")->first();
        if($this->checkPermission($loggedInUser, "product_3") == false){
                            Session::flash('error', 'Sorry! you do not have permission to access this feature');
                            return back();
                        }
        $product =  Product::where("id", $id)->first();
        $product->status = 2;
        if($product->save()){
            Session::flash('success', 'Congrats, product has been deleted successfully');
            return redirect('/admin/products');
        }else{
            Session::flash('error', 'Sorry! An error occured while trying to update product');
            return back();
        }    
    }  
    public function inventories(){
    
        $user = Auth::user();
        if(!$user || $user->type != 1){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $loggedInUser = Admin::join("users", "admins.user_id", "=", "users.id")
                        ->where("admins.user_id", $user->id)
                        ->select("admins.*", "users.id as user_id", "users.status as user_status")->first();
        if($this->checkPermission($loggedInUser, "inventory_1") == false){
            Session::flash('error', 'Sorry! you do not have permission to access this feature');
            return back();
        }
        $inventories = Inventory::join("products", "products.id", "=", "inventories.product_id")
                            ->where("inventories.status", 1)
                            ->select("inventories.*", "products.id as product_id", "products.name as product_name")
                            ->get();

        return view('admin/inventories')->with(["inventories"=>$inventories, "loggedInUser"=>$loggedInUser]);
    }  

    public function newInventory(){
        $user = Auth::user();
        if(!$user || $user->type != 1){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $loggedInUser = Admin::join("users", "admins.user_id", "=", "users.id")
                        ->where("admins.user_id", $user->id)
                        ->select("admins.*", "users.id as user_id", "users.status as user_status")->first();
        if($this->checkPermission($loggedInUser, "inventory_2") == false){
            Session::flash('error', 'Sorry! you do not have permission to access this feature');
            return back();
        }
        $products = Product::where("status", 1)->get();
        return view('admin/new_inventory')->with(["products"=>$products,"loggedInUser"=>$loggedInUser]);
    }
    public function editInventory($id){
        $user = Auth::user();
        if(!$user || $user->type != 1){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $loggedInUser = Admin::join("users", "admins.user_id", "=", "users.id")
                        ->where("admins.user_id", $user->id)
                        ->select("admins.*", "users.id as user_id", "users.status as user_status")->first();
        if($this->checkPermission($loggedInUser, "inventory_3") == false){
                            Session::flash('error', 'Sorry! you do not have permission to access this feature');
                            return back();
                        }
        $products = Product::where("status", 1)->get();
        $inventory = Inventory::where("id", $id)->first();
        return view('admin/edit_inventory')->with(["products"=>$products, "inventory"=>$inventory, "loggedInUser"=>$loggedInUser]);
    }

    public function saveInventory(Request $request){
        $user = Auth::user();
        if(!$user || $user->type != 1){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $loggedInUser = Admin::join("users", "admins.user_id", "=", "users.id")
                        ->where("admins.user_id", $user->id)
                        ->select("admins.*", "users.id as user_id", "users.status as user_status")->first();
        if($this->checkPermission($loggedInUser, "inventory_2") == false){
            Session::flash('error', 'Sorry! you do not have permission to access this feature');
            return back();
        }
        $inventory = new Inventory;
        $inventory->invoice_number = $request->input("invoice_number");
        $inventory->product_id = $request->input("product_id");
        $inventory->date = $request->input("date");
        $inventory->quantity = $request->input("quantity");
        $inventory->unit = $request->input("unit");
        $inventory->cost_price = $request->input("cost_price");
        $inventory->selling_price = $request->input("selling_price");
        $inventory->status = 1;
        $inventory->date = $request->input("date");
        
        if($inventory->save()){
            Session::flash('success', 'Congrats, inventory has been created successfully');
            return redirect('/admin/inventories');
        }else{
            Session::flash('error', 'Sorry! An error occured while trying to create inventory');
            return back();
        }    
    }  
    public function updateInventory(Request $request){
        $user = Auth::user();
        if(!$user || $user->type != 1){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $loggedInUser = Admin::join("users", "admins.user_id", "=", "users.id")
                        ->where("admins.user_id", $user->id)
                        ->select("admins.*", "users.id as user_id", "users.status as user_status")->first();
        if($this->checkPermission($loggedInUser, "inventory_3") == false){
                            Session::flash('error', 'Sorry! you do not have permission to access this feature');
                            return back();
                        }
        $inventory =  Inventory::where("id", $request->input("id"))->first();
        $inventory->invoice_number = $request->input("invoice_number");
        $inventory->product_id = $request->input("product_id");
        $inventory->date = $request->input("date");
        $inventory->quantity = $request->input("quantity");
        $inventory->unit = $request->input("unit");
        $inventory->cost_price = $request->input("cost_price");
        $inventory->selling_price = $request->input("selling_price");
        $inventory->date = $request->input("date");
        
        
        if($inventory->save()){
            Session::flash('success', 'Congrats, inventory has been updated successfully');
            return redirect('/admin/inventories');
        }else{
            Session::flash('error', 'Sorry! An error occured while trying to update inventory');
            return back();
        }    
    }  
    public function deleteInventory($id){
        $user = Auth::user();
        if(!$user || $user->type != 1){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $loggedInUser = Admin::join("users", "admins.user_id", "=", "users.id")
                        ->where("admins.user_id", $user->id)
                        ->select("admins.*", "users.id as user_id", "users.status as user_status")->first();
        if($this->checkPermission($loggedInUser, "inventory_3") == false){
                            Session::flash('error', 'Sorry! you do not have permission to access this feature');
                            return back();
                        }
        $inventory =  Inventory::where("id", $id)->first();
        $inventory->status = 2;
        if($inventory->save()){
            Session::flash('success', 'Congrats, inventory has been deleted successfully');
            return redirect('/admin/inventories');
        }else{
            Session::flash('error', 'Sorry! An error occured while trying to update inventory');
            return back();
        }    
    }  

    public function orders(){
    
        $user = Auth::user();
        if(!$user || $user->type != 1){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $loggedInUser = Admin::join("users", "admins.user_id", "=", "users.id")
                        ->where("admins.user_id", $user->id)
                        ->select("admins.*", "users.id as user_id", "users.status as user_status")->first();
        if($this->checkPermission($loggedInUser, "order_1") == false){
            Session::flash('error', 'Sorry! you do not have permission to access this feature');
            return back();
        }
        $orders = Order::join("order_details", "orders.id", "=", "order_details.order_id")
        ->selectRaw("orders.*,  sum(order_details.selling_price * order_details.qty) as total")
        ->groupBy('orders.id')
        ->get();

        return view('admin/orders')->with(["orders"=>$orders, "loggedInUser"=>$loggedInUser]);
    }  

    public function orderDetails($order_id){
    
        $user = Auth::user();
        if(!$user || $user->type != 1){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $loggedInUser = Admin::join("users", "admins.user_id", "=", "users.id")
                        ->where("admins.user_id", $user->id)
                        ->select("admins.*", "users.id as user_id", "users.status as user_status")->first();
        if($this->checkPermission($loggedInUser, "order_3") == false){
            Session::flash('error', 'Sorry! you do not have permission to access this feature');
            return back();
        }
        $order = Order::leftjoin("order_details", "orders.id", "=", "order_details.order_id")
        ->join("products", "products.id", "=", "order_details.product_id")
        ->join("customers", "customers.id", "=", "orders.customer_id")
        ->select("orders.*",  "order_details.selling_price", "order_details.qty", "products.name", "customers.name as customer_name", "customers.phone as customer_phone")
        ->where("orders.id", $order_id)
        //->groupBy('orders.id')
        ->get();

        return view('admin/order_details')->with(["order"=>$order, "loggedInUser"=>$loggedInUser]);
    }  
    public function orderStatus($order_id, $status){
        $user = Auth::user();
        if(!$user || $user->type != 1){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $loggedInUser = Admin::join("users", "admins.user_id", "=", "users.id")
                        ->where("admins.user_id", $user->id)
                        ->select("admins.*", "users.id as user_id", "users.status as user_status")->first();
        if($this->checkPermission($loggedInUser, "order_2") == false){
                            Session::flash('error', 'Sorry! you do not have permission to access this feature');
                            return back();
                        }
        $order =  Order::where("id", $order_id)->first();
        $order->status = $status;
        if($order->save()){
            Session::flash('success', 'Order status has been updated successfully');
            return back();
        }else{
            Session::flash('error', 'Sorry! An error occured while trying to update order status');
            return back();
        }    
    }  


    public function updateAdminPassword(Request $request){

        if($request->input("password") != $request->input("cpassword")){
            Session::flash('error', 'Sorry!, The two passwords provided must matchy');
            return back();
        }
        $user = Auth::user();
        
        $user = User::where("username", $user->username)->first();

        $user->password = bcrypt($request->input("password"));

        $user->save();

        Session::flash('success', 'Congrats, your password has been updated successfully');
        return back();
    }
    
    public function updateProfile(Request $request){
    
        $user = Auth::user();
        if(!$user || $user->type != 1){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $admin = Admin::where("admins.user_id", $user->id)->first();
        $admin->name = $request->input("name");
        $admin->phone = $request->input("phone");
        $admin->email = $request->input("email");
        $user = User::where("id", $user->id)->first();
        $user->email = $request->input("email");
        if($admin->save()){
            $user->save();
            Session::flash('success', "Profile updated succeessfully");
            return back();
        }else{
            Session::flash('error', 'An error occured while trying to update profile.');
            return back();
        }    
    }  

    public function adminMail($email, $name, $password){
        $sender = 'info@cashluck.com.ng';
        $data = [
            'email'=> $email,
            'name'=> $name,
            'token'=> $password,
            'date'=>date('Y-m-d')
        ];
        Mail::send('admin-mail', $data, function($message) use($data){
            $message->from($sender, 'Neon');
            $message->SMTPDebug = 4; 
            $message->to($data['email']);
            $message->subject('Account Creation');
        });
    }
    
    public function profile(){
        $user = Auth::user();
        if(!$user || $user->type != 1){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $loggedInUser = Admin::join("users", "admins.user_id", "=", "users.id")
                        ->where("admins.user_id", $user->id)
                        ->select("admins.*", "users.id as user_id", "users.status as user_status")->first();

        return view('admin/profile')->with(["loggedInUser"=>$loggedInUser]);
    } 
    public function updatePassword(Request $request){

        if($request->input("password") != $request->input("password1")){
            Session::flash('error', 'Sorry!, The two passwords provided must match');
            return back();
        }
        $user = Auth::user();
        
        $user = User::where("id", $user->id)->first();

        $user->password = bcrypt($request->input("password"));

        $user->save();

        Session::flash('success', 'Thank you, your password has been updated successfully');
        return back();
    }

    public function resetMail(Request $request){

        
        $email = $request->input('email');

        $user = User::where('email', $email)->first();
        
        $user_id = $user->id;

        $token = time();

        $user = User::where('id', $user_id)->first();

        $user->token = $token;

        $user->save();
        
        $sender = 'yinka@theaffinityclub.com';
        
        
 
        $data = [
        'email'=> $email,
        'token'=> $token,
        'date'=>date('Y-m-d')
        
        
        ];
 
        Mail::send('reset-password', $data, function($message) use($data){
            
            $message->from('yinka@theaffinityclub.com', 'Labisys');
            $message->SMTPDebug = 4; 
            $message->to($data['email']);
            $message->subject('Password Recovery');
 
            Session::flash('success', 'An Email has been sent to your account. Pls check to proceed');
        
            return view('/');
        });
    }        
}
