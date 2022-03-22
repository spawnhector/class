<?php

// use App\Models\dealer;

use App\Models\dealer;
use Illuminate\Http\Request;
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
    return view('goTo.Home.home');
})->name('home');

Route::get('/car/{id}', function ($id) {
    return view('goTo.Home.car',['slug'=>$id]);
})->name('car');

Route::get('/list', function (Request $request) {
    if ($request->has('make')) {
        return view('goTo.Home.list',['slug'=>$request->make]);
    }else{
        return view('goTo.Home.list',['slug'=>'']);
    }
})->name('list');

Route::get('/dealers', function(){
    return response()->json([
        'success' => 'ok',
        'dealers' => dealer::with('vehicle')->get()
    ]);
})->middleware('user');

Route::get('/dashboard', function () {
    return view('goTo.user.dashboard');
})->middleware('user')->name('user.dashboard');

