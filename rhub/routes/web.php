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

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function() {
    
    
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
    Route::get('dashboard/Post', 'App\Http\Controllers\DashboardController@show')->name('dashboard.show');
    Route::post('dashboard/Post/comment', 'App\Http\Controllers\DashboardController@comment')->name('dashboard.comment');
    // Route::group(['Prefix' => '/dashboard'],function(){

    // });


});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
