<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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


Route::get('/dashboard',[AdminController::class,'dashboard']);
Route::post('/admin_login',[AdminController::class,'admin_dashboard']);
Route::get('/logout',[AdminController::class,'logout']);
//admin
Route::get('/admin',[AdminController::class,'index']);
//admin - category
Route::get('/ad_category',[CategoryController::class,'admin_cate']);
Route::get('/insert-category',[CategoryController::class,'create_cate']);
Route::post('/add-cate',[CategoryController::class,'add_category']);
Route::get('/delete-category/{id_category}',[CategoryController::class,'del_category']);
Route::get('/edit-category/{id_category}',[CategoryController::class,'edit_category']);
Route::post('/update-cate/{id_category}',[CategoryController::class,'update_category']);
Route::get('/active-cate/{id_category}',[CategoryController::class,'active_cate']);
Route::get('/unactive-cate/{id_category}',[CategoryController::class,'unactive_cate']);
//admin brand
Route::get('admin_contact',[AdminController::class,'admin_contact']);
Route::get('delete_contact/{contact_id}',[AdminController::class,'delete_contact']);
//admin contact
Route::get('/admin_brand',[BrandController::class,'admin_brand']);
Route::get('/insert-brand',[BrandController::class,'insert_brand']);
Route::post('/add-brand',[BrandController::class,'add_brand']);
Route::get('/delete-brand/{id_brand}',[BrandController::class,'del_brand']);
Route::get('/edit-brand/{id_brand}',[BrandController::class,'edit_brand']);
Route::post('/update-brand/{id_brand}',[BrandController::class,'update_brand']);
Route::get('/active-brand/{id_brand}',[BrandController::class,'active_brand']);
Route::get('/unactive-brand/{id_brand}',[BrandController::class,'unactive_brand']);
//admin product 
Route::get('/ad_product',[ProductController::class,'admin_product']);
Route::get('/insert-product',[ProductController::class,'create_product']);
Route::post('/add-product',[ProductController::class,'add_product']);
Route::get('/edit-product/{id_product}',[ProductController::class,'edit_product']);
Route::post('/update-product/{id_product}',[ProductController::class,'update_product']);
Route::get('/delete-product/{id_product}',[ProductController::class,'delete_product']);
Route::get('/active-product/{id_product}',[ProductController::class,'active_product']);
Route::get('/unactive-product/{id_product}',[ProductController::class,'unactive_product']);
//admin color
Route::get('/admin_color',[OptionController::class,'admin_color']);
Route::get('/create_color_product',[OptionController::class,'create_color']);
Route::post('/add-color',[OptionController::class,'add_color']);
Route::get('/active-color/{id_color}',[OptionController::class,'active_color']);
Route::get('/unactive-color/{id_color}',[OptionController::class,'unactive_color']);
Route::get('/delete-color/{id_color}',[OptionController::class,'delete_color']);
//admin size
Route::get('/admin_size',[OptionController::class,'admin_size']);
Route::get('/create_size_product',[OptionController::class,'create_size']);
Route::post('/add-size',[OptionController::class,'add_size']);
Route::get('/active-size/{id_size}',[OptionController::class,'active_size']);
Route::get('/unactive-size/{id_size}',[OptionController::class,'unactive_size']);
Route::get('/delete-size/{id_size}',[OptionController::class,'delete_size']);
//new admin
Route::get('admin_news','App\Http\Controllers\NewController@admin_news');
Route::get('insert_new','App\Http\Controllers\NewController@insert_new');
Route::post('add_new','App\Http\Controllers\NewController@add_new');
Route::get('/delete-new/{new_id}',[NewController::class,'del']);
Route::get('/active-new/{new_id}',[NewController::class,'active_new']);
Route::get('/unactive-new/{new_id}',[NewController::class,'unactive_new']);
Route::get('/edit_new/{new_id}',[NewController::class,'edit_new']);
Route::PUT('/update_new/{new_id}',[NewController::class,'update_new']);
Route::get('/tin-tuc',[NewController::class,'tintuc']);
Route::get('/new_detail/{new_id}',[NewController::class,'new_detail']);
Route::get('/contact_us',[NewController::class,'contact_us']);
Route::post('/send_contact',[NewController::class,'send_contact']);

// -------------------------------------------user--------------------------------------
Route::get('/',[HomeController::class,'index']);

//frontend
Route::get('/category_main/{id_category}',[HomeController::class,'category_main']);
Route::get('/brands_main/{id_brand}',[HomeController::class,'brand_main']);

//account user 
Route::get('register',[AccountController::class,'register']);
Route::post('create_acc',[AccountController::class,'create_acc']);
Route::post('login_user',[AccountController::class,'login_user']);
Route::get('login_acc',[AccountController::class,'login']);
Route::get('checkout',[AccountController::class,'checkout']);
Route::get('show_product_detail/{id_product}',[ProductController::class,'show_product_detail']);


Route::post('quickview',[ProductController::class,'quickview']);

//detail-product
Route::get('/detail_product/{id_product}',[ProductController::class,'detail_product']);
Route::post('save-cart','App\Http\Controllers\ProductController@save_cart');
Route::get('show-cart','App\Http\Controllers\ProductController@show_cart');
Route::get('delete-cart-item/{id_product}','App\Http\Controllers\ProductController@delete_cart_item');
Route::post('update-cart-qty','App\Http\Controllers\ProductController@update_cart_qty');
Route::get('login_checkout','App\Http\Controllers\PaymentController@login_checkout');

//payment 
Route::get('payment_show','App\Http\Controllers\PaymentController@payment_show');
Route::get('search_product','App\Http\Controllers\ProductController@search');
Route::get('filter_product','App\Http\Controllers\ProductController@filter_product');
Route::get('filter_brand','App\Http\Controllers\ProductController@filter_brand');
Route::post('address_customer','App\Http\Controllers\PaymentController@address_cus');
Route::get('delete_address_user/{id_shipping}','App\Http\Controllers\PaymentController@delete_address_user');
Route::post('order_product','App\Http\Controllers\PaymentController@order_product');
Route::get('ship_code','App\Http\Controllers\PaymentController@ship_code');
Route::get('cus_order','App\Http\Controllers\PaymentController@cus_order');
Route::get('bill_detail/{order_id}','App\Http\Controllers\PaymentController@bill_detail');

