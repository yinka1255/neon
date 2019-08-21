<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('login');
});

Route::get('/receipt', 'CustomersController@receipt');
Route::get('/logout', 'LoginsController@logout');

Route::post('/authenticate', 'LoginsController@authenticate');
Route::post('/create', 'UsersController@customerRegister');
Route::post('/register_customer', 'CustomersController@customerRegister');

Route::get('/register', function () {
    return view('register');
});
Route::get('/admin/index', 'AdminsController@index');
Route::get('/admin/admins', 'AdminsController@admins');
Route::get('/admin/new_admin', 'AdminsController@newAdmin');
Route::get('/admin/edit_admin/{id}', 'AdminsController@editAdmin');
Route::post('/admin/save_admin', 'AdminsController@saveAdmin');
Route::post('/admin/save_permissions', 'AdminsController@savePermissions');

Route::get('/admin/admins', 'AdminsController@admins');
Route::get('/admin/new_admin', 'AdminsController@newAdmin');
Route::get('/admin/edit_admin/{id}', 'AdminsController@editAdmin');
Route::post('/admin/save_admin', 'AdminsController@saveAdmin');
Route::get('/admin/deactivate_admin/{id}', 'AdminsController@deactivateAdmin');
Route::get('/admin/activate_admin/{id}', 'AdminsController@activateAdmin');

Route::get('/admin/categories', 'AdminsController@categories');
Route::get('/admin/new_category', 'AdminsController@newCategory');
Route::get('/admin/edit_category/{id}', 'AdminsController@editCategory');
Route::get('/admin/delete_category/{id}', 'AdminsController@deleteCategory');
Route::post('/admin/save_category', 'AdminsController@saveCategory');
Route::post('/admin/update_category', 'AdminsController@updateCategory');

Route::get('/admin/products', 'AdminsController@products');
Route::get('/admin/new_product', 'AdminsController@newProduct');
Route::get('/admin/edit_product/{id}', 'AdminsController@editProduct');
Route::get('/admin/delete_product/{id}', 'AdminsController@deleteProduct');
Route::post('/admin/save_product', 'AdminsController@saveProduct');
Route::post('/admin/update_product', 'AdminsController@updateProduct');

Route::get('/admin/inventories', 'AdminsController@inventories');
Route::get('/admin/new_inventory', 'AdminsController@newInventory');
Route::get('/admin/edit_inventory/{id}', 'AdminsController@editInventory');
Route::get('/admin/delete_inventory/{id}', 'AdminsController@deleteInventory');
Route::post('/admin/save_inventory', 'AdminsController@saveInventory');
Route::post('/admin/update_inventory', 'AdminsController@updateInventory');

Route::get('/admin/customers', 'AdminsController@customers');
Route::get('/admin/deactivate_customer/{id}', 'AdminsController@deactivateCustomer');
Route::get('/admin/activate_customer/{id}', 'AdminsController@activateCustomer');

Route::get('/admin/profile', 'AdminsController@profile');

Route::get('/admin/orders', 'AdminsController@orders');
Route::get('/admin/order_status/{order_id}/{status}', 'AdminsController@orderStatus');
Route::get('/admin/order_details/{order_id}', 'AdminsController@orderDetails');

Route::post('/admin/update_profile', 'AdminsController@updateProfile');
Route::post('/admin/update_password', 'AdminsController@updatePassword');

Route::get('/', 'CustomersController@index');
Route::get('/products', 'CustomersController@products');
Route::get('/about', 'CustomersController@about');
Route::get('/faqs', 'CustomersController@faqs');
Route::get('/terms', 'CustomersController@terms');
Route::get('/policy', 'CustomersController@policy');
Route::get('/contact', 'CustomersController@contact');

Route::post('/search_product', 'CustomersController@searchProduct');
Route::get('/category_products/{category_id}', 'CustomersController@categoryProducts');
Route::get('/cart_add/{product_id}', 'CustomersController@cartAdd');
Route::get('/cart', 'CustomersController@cart');
Route::get('/checkout', 'CustomersController@checkout');
Route::get('/remove_cart/{id}', 'CustomersController@removeCart');
Route::get('/product_details/{id}', 'CustomersController@productDetails');

Route::post('/update_cart', 'CustomersController@updateCart');
Route::post('/complete_order', 'CustomersController@completeOrder');

Route::get('/profile', 'CustomersController@profile');

Route::post('/update_profile', 'CustomersController@updateProfile');
Route::post('/update_password', 'CustomersController@updatePassword');