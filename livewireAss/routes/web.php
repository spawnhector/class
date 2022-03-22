<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\StudentController;
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
})->name('welcome');

Route::get('login',[\App\Http\Livewire\AuthController::class,'login'])->name('login');
Route::get('dashboard',[adminController::class,'index'])->name('admin.dashboard');
Route::get('addstudent',[StudentController::class,'addStudent'])->name('admin.addstudent');
Route::get('addnumber',[StudentController::class,'addNumber'])->name('admin.addnumber');
Route::get('editnumber/{id}',[StudentController::class,'editNumber'])->name('admin.editnumber');
Route::get('dropdown',[StudentController::class,'dropDown'])->name('dropdown');
Route::get('getstudent/{id}',[StudentController::class,'getStudent'])->name('admin.getstudent');
Route::get('editstudent/{id}',[StudentController::class,'editStudent'])->name('admin.editstudent');
Route::get('logout',[adminController::class,'logout'])->name('logout');
