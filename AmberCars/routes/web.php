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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'App\Http\Controllers\display@index')->name('show');
Route::get('/delete/{id}', 'App\Http\Controllers\display@delete')->name('delete');
Route::get('/store', 'App\Http\Controllers\store@store')->name('store');
Route::post('/storebrand', 'App\Http\Controllers\store@storebrand')->name('storebrand');
Route::post('/storevhcl_type', 'App\Http\Controllers\store@storevhcl_type')->name('storevhcl_type');
Route::post('/storemodel', 'App\Http\Controllers\store@storemodel')->name('storemodel');
