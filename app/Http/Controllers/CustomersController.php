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
use App\Vendor;
use App\Customer;
use App\State;
use App\Order;
use App\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use Mail;
use Cart;

class CustomersController extends Controller{

    public function index(){
        $user = Auth::user();
        $products = Product::join("inventories", "inventories.product_id", "=", "products.id")
        ->select("products.*", "inventories.selling_price", "inventories.id as inventory_id")
        ->orderByRaw('RAND()')->take(8)->get();
        $categories = Category::leftjoin("products", "products.category_id", "=", "categories.id")
        ->selectRaw('categories.*, count(products.category_id) as categoryCount')
        ->groupBy('categories.id', 'categories.name')
        ->where("categories.status", 1)->get();
        if($user){
            $loggedInUser = Customer::join("users", "customers.user_id", "=", "users.id")
            ->where("customers.user_id", $user->id)
            ->select("customers.*", "users.id as user_id", "users.status as user_status")->first();

            return view('/index')->with(["loggedInUser"=>$loggedInUser, "products"=>$products, "categories"=>$categories]);
        }else{
            return view('/index')->with(["products"=>$products, "categories"=>$categories]);
        }
    }

    public function productDetails($product_id){
        $user = Auth::user();
        $product = Product::join("inventories", "inventories.product_id", "=", "products.id")
        ->select("products.*", "inventories.selling_price", "inventories.id as inventory_id")
        ->where("products.id", $product_id)->first();
        $categories = Category::leftjoin("products", "products.category_id", "=", "categories.id")
        ->selectRaw('categories.*, count(products.category_id) as categoryCount')
        ->groupBy('categories.id', 'categories.name')
        ->where("categories.status", 1)->get();
        $products = Product::join("inventories", "inventories.product_id", "=", "products.id")
        ->select("products.*", "inventories.selling_price", "inventories.id as inventory_id")
        ->where("products.category_id", $product->category_id)
        ->orderByRaw('RAND()')->take(8)->get();
        if($user){
            $loggedInUser = Customer::join("users", "customers.user_id", "=", "users.id")
            ->where("customers.user_id", $user->id)
            ->select("customers.*", "users.id as user_id", "users.status as user_status")->first();

            return view('/product_details')->with(["loggedInUser"=>$loggedInUser, "product"=>$product, "categories"=>$categories, "products"=>$products]);
        }else{
            return view('/product_details')->with(["product"=>$product, "categories"=>$categories, "products"=>$products]);
        }
    }

    public function profile(){
        $user = Auth::user();
        if(!$user || $user->type != 3){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $loggedInUser = Customer::join("users", "customers.user_id", "=", "users.id")
                        ->where("customers.user_id", $user->id)
                        ->select("customers.*", "users.id as user_id", "users.status as user_status")->first();

        return view('profile')->with(["loggedInUser"=>$loggedInUser]);
    } 

    public function updatePassword(Request $request){

        if($request->input("password") != $request->input("cpassword")){
            Session::flash('error', 'Sorry!, The two passwords provided must matchy');
            return back();
        }
        $user = Auth::user();
        $user = User::where("username", $user->username)->first();
        $user->password = bcrypt($request->input("password"));
        $user->save();
        Session::flash('success1', 'Congrats, your password has been updated successfully');
        return back();
    }
    
    public function updateProfile(Request $request){
        $user = Auth::user();
        if(!$user || $user->type != 3){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $customer = Customer::where("customers.user_id", $user->id)->first();
        $customer->name = $request->input("name");
        $customer->phone = $request->input("phone");
        $customer->email = $request->input("email");
        $user = User::where("id", $user->id)->first();
        $user->email = $request->input("email");
        if($customer->save()){
            $user->save();
            Session::flash('success1', "Profile updated succeessfully");
            return back();
        }else{
            Session::flash('error', 'An error occured while trying to update profile.');
            return back();
        }    
    }  

    public function products(){
        $user = Auth::user();
        $products = Product::join("inventories", "inventories.product_id", "=", "products.id")
        ->select("products.*", "inventories.selling_price", "inventories.id as inventory_id")
        ->paginate(30);
        $categories = Category::leftjoin("products", "products.category_id", "=", "categories.id")
        ->selectRaw('categories.*, count(products.category_id) as categoryCount')
        ->groupBy('categories.id', 'categories.name')
        ->where("categories.status", 1)->get();
        if($user){
            $loggedInUser = Customer::join("users", "customers.user_id", "=", "users.id")
            ->where("customers.user_id", $user->id)
            ->select("customers.*", "users.id as user_id", "users.status as user_status")->first();

            return view('/products')->with(["loggedInUser"=>$loggedInUser, "categories"=>$categories, "products"=>$products]);
        }else{
            return view('/products')->with(["categories"=>$categories, "products"=>$products]);
        }
    }

    public function completeOrder(Request $request){
        $user = Auth::user();
        $loggedInUser = Customer::join("users", "customers.user_id", "=", "users.id")
            ->where("customers.user_id", $user->id)
            ->select("customers.*", "users.id as user_id", "users.status as user_status")->first();
        $order = new Order;
        $order->contact_person = $request->input('contact_person');
        $order->customer_id = $loggedInUser->id;
        $order->phone = $request->input('phone');
        $order->address = $request->input('address');
        $order->state = $request->input('state');
        $order->status = 1;
        if($order->save()){
            foreach(Cart::content() as $cart){
                $order_details = new OrderDetail;
                $order_details->order_id = $order->id;
                $order_details->product_id = $cart->id;
                $order_details->selling_price = $cart->price;
                $order_details->qty = $cart->qty;
                $order_details->status = 1;
                $order_details->save();
            }
            $order = Order::leftjoin("order_details", "orders.id", "=", "order_details.order_id")
            ->join("products", "products.id", "=", "order_details.product_id")
            ->join("customers", "customers.id", "=", "orders.customer_id")
            ->select("orders.*",  "order_details.selling_price", "order_details.qty", "products.name", "customers.name as customer_name", "customers.phone as customer_phone", "customers.email as customer_email")
            ->where("orders.id", $order->id)
            ->get();
            Cart::destroy();
            $this->mailReceipt($order);
            Session::flash('success2', 'Order completed succssfully... Our delivery team will contact you shortly');
            return redirect('/');
        }else{
            Session::flash('error', 'An error occured while processing your order');
            return back();
        }
    }

    public function mailReceipt($order){
        $data = [
            'email'=> $order[0]->customer_email,
            'order'=> $order,
            'date'=>date('Y-m-d')
        ];
        Mail::send('receipt_mail', $data, function($message) use($data){
            $message->from('info@cashluck.com.ng', 'Neon');
            $message->SMTPDebug = 4; 
            $message->to($data['email']);
            $message->subject('Neon purchase receipt');
        });
    }

    public function receipt(){
        $order = Order::leftjoin("order_details", "orders.id", "=", "order_details.order_id")
            ->join("products", "products.id", "=", "order_details.product_id")
            ->join("customers", "customers.id", "=", "orders.customer_id")
            ->select("orders.*",  "order_details.selling_price", "order_details.qty", "products.name", "customers.name as customer_name", "customers.phone as customer_phone")
            ->where("orders.id", 1)
            ->get();
        return view("receipt_mail")->with(["order"=>$order]);
    }


    public function searchProduct(Request $request){
        $user = Auth::user();
        $search = $request->input('product');
        $products = Product::join("inventories", "inventories.product_id", "=", "products.id")
        ->select("products.*", "inventories.selling_price", "inventories.id as inventory_id")
        ->where("products.name", 'LIKE', '%' . $search . '%')
        ->paginate(30);
        $categories = Category::leftjoin("products", "products.category_id", "=", "categories.id")
        ->selectRaw('categories.*, count(products.category_id) as categoryCount')
        ->groupBy('categories.id', 'categories.name')
        ->where("categories.status", 1)->get();
        if($user){
            $loggedInUser = Customer::join("users", "customers.user_id", "=", "users.id")
            ->where("customers.user_id", $user->id)
            ->select("customers.*", "users.id as user_id", "users.status as user_status")->first();

            return view('/products')->with(["loggedInUser"=>$loggedInUser, "categories"=>$categories, "products"=>$products]);
        }else{
            return view('/products')->with(["categories"=>$categories, "products"=>$products]);
        }
    }

    public function categoryProducts($category_id){
        $user = Auth::user();
        $products = Product::join("inventories", "inventories.product_id", "=", "products.id")
        ->select("products.*", "inventories.selling_price", "inventories.id as inventory_id")
        ->where("products.category_id", $category_id)
        ->paginate(30);
        $categories = Category::leftjoin("products", "products.category_id", "=", "categories.id")
        ->selectRaw('categories.*, count(products.category_id) as categoryCount')
        ->groupBy('categories.id', 'categories.name')
        ->where("categories.status", 1)->get();
        if($user){
            $loggedInUser = Customer::join("users", "customers.user_id", "=", "users.id")
            ->where("customers.user_id", $user->id)
            ->select("customers.*", "users.id as user_id", "users.status as user_status")->first();

            return view('/products')->with(["loggedInUser"=>$loggedInUser, "categories"=>$categories, "products"=>$products]);
        }else{
            return view('/products')->with(["categories"=>$categories, "products"=>$products]);
        }
    }

    public function cartAdd($product_id){
        $product = Product::join("inventories", "inventories.product_id", "=", "products.id")
        ->select("products.*", "inventories.selling_price", "inventories.id as inventory_id")
        ->where("products.id", $product_id)->first();
        Cart::add($product->id, $product->name, 1, $product->selling_price, ['image' => $product->image]);
        Session::flash('success', $product->name.' added to cart');
        return back();
    }
    public function removeCart($rowId){
        Cart::remove($rowId);
        Session::flash('success1', 'Item removed from cart');
        return back();
    }

    public function updateCart(Request $request){
        Cart::update($request->input('rowId'), $request->input('qty')+1);
        return back();
    }

    public function cart(){
        $user = Auth::user();
        if($user){
            $loggedInUser = Customer::join("users", "customers.user_id", "=", "users.id")
            ->where("customers.user_id", $user->id)
            ->select("customers.*", "users.id as user_id", "users.status as user_status")->first();
            return view('cart')->with(["loggedInUser"=>$loggedInUser]);
        }else{
            return view('cart');
        }
    }

    public function checkout(){
        $user = Auth::user();
        if($user){
            $loggedInUser = Customer::join("users", "customers.user_id", "=", "users.id")
            ->where("customers.user_id", $user->id)
            ->select("customers.*", "users.id as user_id", "users.status as user_status")->first();
            return view('checkout')->with(["loggedInUser"=>$loggedInUser]);
        }else{
        return view('checkout');
        }
    }

    public function about(){
        $user = Auth::user();
        if($user){
            $loggedInUser = Customer::join("users", "customers.user_id", "=", "users.id")
                        ->where("customers.user_id", $user->id)
                        ->select("customers.*", "users.id as user_id", "users.status as user_status")->first();
             return view('/about')->with(["loggedInUser"=>$loggedInUser]);
        }else{
            return view('/about');
        }
    }

    public function faqs(){
        $user = Auth::user();
        if($user){
            $loggedInUser = Customer::join("users", "customers.user_id", "=", "users.id")
                        ->where("customers.user_id", $user->id)
                        ->select("customers.*", "users.id as user_id", "users.status as user_status")->first();
             return view('/faqs')->with(["loggedInUser"=>$loggedInUser]);
        }else{
            return view('/faqs');
        }
    }
    public function terms(){
        $user = Auth::user();
        if($user){
            $loggedInUser = Customer::join("users", "customers.user_id", "=", "users.id")
                        ->where("customers.user_id", $user->id)
                        ->select("customers.*", "users.id as user_id", "users.status as user_status")->first();
             return view('/terms')->with(["loggedInUser"=>$loggedInUser]);
        }else{
            return view('/terms');
        }
    }
    public function policy(){
        $user = Auth::user();
        if($user){
            $loggedInUser = Customer::join("users", "customers.user_id", "=", "users.id")
                        ->where("customers.user_id", $user->id)
                        ->select("customers.*", "users.id as user_id", "users.status as user_status")->first();
             return view('/policy')->with(["loggedInUser"=>$loggedInUser]);
        }else{
            return view('/policy');
        }
    }
    public function contact(){
        $user = Auth::user();
        if($user){
            $loggedInUser = Customer::join("users", "customers.user_id", "=", "users.id")
                        ->where("customers.user_id", $user->id)
                        ->select("customers.*", "users.id as user_id", "users.status as user_status")->first();
             return view('/contact')->with(["loggedInUser"=>$loggedInUser]);
        }else{
            return view('/contact');
        }
    }

    public function customerRegister(Request $request){
        $check = User::where("email", $request->input("email"))->first();
        if($check != null){
            Session::flash('error', 'Sorry! An account with the provided email already exist');
            return back();
        }
        $user = new User;
        $user->email = $request->input("email");
        $password = $request->input("password");
        $user->password = bcrypt($password);
        $user->type = 3;
        $user->status = 1;
        if($user->save()){
            $customer = new Customer;
            $customer->user_id = $user->id;
            $customer->name = $request->input("name");
            $customer->phone = $request->input("phone");
            $customer->email = $request->input("email");
            $customer->status = 1;
            
            if($customer->save()){
                Auth::loginUsingId($user->id);
                //$this->adminMail($request->input("email"), $request->input("name"), $password);
                Session::flash('success', 'Congrats, your account has been created successfully');
                return back();
            }else{
                Session::flash('error', 'Sorry! An error occured while trying to create account');
                return back();
            }    
        }else{
            Session::flash('error', 'Sorry! An error occured while trying to create account');
                return back();
        }    
    }  

}
