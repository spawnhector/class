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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('user/dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/admindashboard', function () {
    return view('admin/admindashboard');
})->middleware(['auth'])->name('admindashboard');

Route::get('/order', 'App\Http\Controllers\studentController@order')->middleware(['auth'])->name('order');

// Route::get('/order', function () {
//     return view('user/order');
// })->middleware(['auth'])->name('order');

Route::get('/vieworder', function () {
    return view('admin/order');
})->middleware(['auth'])->name('vieworder');

Route::get('/student', function () {
    return view('admin/student');
})->middleware(['auth'])->name('student');

Route::get('/setting', 'App\Http\Controllers\adminController@setting')->middleware(['auth'])->name('setting');

// store, delete && update Admin

Route::post('/addcat', 'App\Http\Controllers\adminController@addcat')->middleware(['auth'])->name('addcat');
Route::post('/addtype', 'App\Http\Controllers\adminController@addtype')->middleware(['auth'])->name('addtype');
Route::post('/deletetype', 'App\Http\Controllers\adminController@deletetype')->middleware(['auth'])->name('deletetype');
Route::post('/deletecat', 'App\Http\Controllers\adminController@deletecat')->middleware(['auth'])->name('deletecat');
Route::post('/updatecat', 'App\Http\Controllers\adminController@updatecat')->middleware(['auth'])->name('updatecat');
Route::post('/updatemeal', 'App\Http\Controllers\adminController@updatemeal')->middleware(['auth'])->name('updatemeal');
Route::post('/getresentmeal', 'App\Http\Controllers\adminController@getresentmeal')->middleware(['auth'])->name('getresentmeal');

//student
Route::post('/addToOrder', 'App\Http\Controllers\studentController@addToOrder')->middleware(['auth'])->name('addToOrder');
require __DIR__.'/auth.php';
