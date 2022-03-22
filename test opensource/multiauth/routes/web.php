<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('login',function(){
    return view('layout.auth.login');
})->name('login');

Route::post('logout',function(){
    Auth::logout();
    return view('welcome');
})->name('logout');

Route::get('register',function(){
    return view('layout.auth.register');
})->name('register');


Route::get('user/home', function(){
    return view('layout.user.index');
})->middleware('user')->name('user.home');


Route::get('admin/home', function(){
    return view('layout.admin.index');
})->middleware('admin')->name('admin.home');

Route::get('super/home', function(){
    return view('layout.super.index');
})->middleware('superAdmin')->name('super.home');