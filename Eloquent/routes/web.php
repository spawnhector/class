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


Route::get('/', function(){
    return view('welcome');
});
Route::get('addcat', 'App\Http\Controllers\categoryController@def_category');
Route::get('addprod', 'App\Http\Controllers\productController@def_product');
Route::get('updateprod', 'App\Http\Controllers\updateProdController@update')->name('update');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
