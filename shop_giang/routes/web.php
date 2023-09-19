<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::post('/admin_login_ac',[AdminController::class,'dashboard']);
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