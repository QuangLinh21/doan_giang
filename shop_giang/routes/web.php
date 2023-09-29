<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
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


// -------------------------------------------user--------------------------------------
Route::get('/',[HomeController::class,'index']);