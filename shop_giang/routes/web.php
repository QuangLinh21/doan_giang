<?php

use App\Http\Controllers\AdminController;
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
Route::post('/add-cate',[CategoryController::class,'add_cate']);
Route::post('/add-cate',[CategoryController::class,'add_category']);
Route::get('/delete-category/{id_category}',[CategoryController::class,'del_category']);
Route::get('/edit-category/{id_category}',[CategoryController::class,'edit_category']);
Route::post('/update-cate/{id_category}',[CategoryController::class,'update_category']);
Route::post('/active-cate/{id_category}',[CategoryController::class,'active_cate']);
Route::post('/unactive-cate/{id_category}',[CategoryController::class,'unactive_cate']);