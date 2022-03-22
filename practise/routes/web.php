<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;

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

// index page route
Route::get('/',[HomeController::class,'index'])->name('welcome');

// access pages route
Route::get('/home',[HomeController::class,'home'])->name('home');
Route::get('/dashboard/post',[PostController::class,'post'])->name('post');
Route::get('/admin/myprofile',[PagesController::class,'admin_profile'])->name('admin.profile');

// recieve admin profile data route
Route::post('/admin/myprofile/edit',[PagesController::class,'admin_profile_modal'])->name('admin.profile.edit');
Route::post('/admin/myprofile/edits',[PagesController::class,'admin_profile_modal_admin'])->name('admin.profile.edit.admin');
// Route::post('/admin/myprofile/delete',[userDeleteController::class,'delete'])->name('admin.profile.delete');


// recieve post create data route 
Route::post('/home/post/createpost',[PostController::class,'postcreate'])->name('post.create');

// login/register route
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::get('/login/admin',[LoginController::class,'login_login'])->name('login.login');
Route::get('/register',[RegisterController::class,'register'])->name('register');
Route::get('/register/admin',[RegisterController::class,'register_admin'])->name('register.admin');

Route::get('/logout',[LogoutController::class,'logout'])->name('logout');

// recieve form data route
Route::post('/login/user',[LoginController::class,'login_user'])->name('login.user');
Route::post('/admin/dashboard',[LoginController::class,'login_admin'])->name('login.admin');
Route::post('/register/user',[RegisterController::class,'register_user'])->name('register.user');
Route::post('/register/admin/new',[RegisterController::class,'register_admin_new'])->name('register.admin.new');

Route::get('autoroute',[HomeController::class,'autoroute'])->name('autoroute');
Route::get('gettautoroute',[HomeController::class,'getautoroute'])->name('getautoroute');

// Route::group(['middleware' => 'auth'],function(){
// });
