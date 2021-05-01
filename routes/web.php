<?php

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

Route::get('/product', function () {
    return view('product');
});
Route::get('/user', function () {
    return view('user');
});
Route::get('/pengolahan', function () {
    return view('pengolahan');
});
Route::get('/kategori', function () {
    return view('kategori');
});
route::view('/merek','merek');
Route::get('/user/tambah',[UserController::class,'tambah']);
Route::post('/user/insert',[UserController::class,'insert']);
Route::get('/product/tambah',[ProductController::class,'tambah']);
Route::post('/product/insert',[ProductController::class,'insert']);
Route::get('/merek/tambah',[MerekController::class,'tambah']);
Route::post('/merek/insert',[MerekController::class,'insert']);
Route::get('/kategori/tambah',[KategoriController::class,'tambah']);
Route::post('/kategori/insert',[KategoriController::class,'insert']);

Route::get('/user/edit/{id}',[UserController::class,'edit']);
Route::post('/user/update/{id}',[UserController::class,'update']);
Route::get('/product/edit',[ProductController::class,'edit']);
Route::post('/product/update',[ProductController::class,'update']);
Route::get('/merek/edit',[MerekController::class,'edit']);
Route::post('/merek/update',[MerekController::class,'update']);
Route::get('/kategori/edit',[KategoriController::class,'edit']);
Route::post('/kategori/update',[KategoriController::class,'update']);