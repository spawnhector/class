<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::group(['middleware'=>'admin'], function(){
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'adminIndex'])->name('admin.home');
    Route::post('/addstudent', [App\Http\Controllers\studentController::class, 'addstudent'])->name('admin.addstudent');
    Route::post('/getstudents', [App\Http\Controllers\studentController::class, 'getstudent'])->name('admin.getstudent');
    Route::get('/viewstudents/{id}', [App\Http\Controllers\studentController::class, 'viewstudent'])->name('admin.viewstudent');
    Route::post('/editstudents', [App\Http\Controllers\studentController::class, 'editstudent'])->name('admin.editstudent');
    Route::post('/getsubjectalls', [App\Http\Controllers\subjectController::class, 'getsubjectall'])->name('admin.getsubjectall');
    Route::post('/addstudentsubjects', [App\Http\Controllers\subjectChoiceController::class, 'addstudentsubject'])->name('admin.addstudentsubject');
    Route::post('/studentcustompaginates', [App\Http\Controllers\studentController::class, 'customPaginate'])->name('admin.studentcustompaginate');
    Route::post('/updatestudents', [App\Http\Controllers\studentController::class, 'updatestudent'])->name('admin.updatestudent');
    Route::post('/deletestudents', [App\Http\Controllers\studentController::class, 'deletestudent'])->name('admin.deletestudent');
    Route::post('/addsubject', [App\Http\Controllers\subjectController::class, 'addsubject'])->name('admin.addsubject');
    Route::post('/updatesubjects', [App\Http\Controllers\subjectController::class, 'updatesubject'])->name('admin.updatesubject');
    Route::post('/editsubject', [App\Http\Controllers\subjectController::class, 'editsubject'])->name('admin.editsubject');
    Route::post('/getsubjects', [App\Http\Controllers\subjectController::class, 'getsubject'])->name('admin.getsubject');
    Route::get('/getsubjectchoices', [App\Http\Controllers\subjectChoiceController::class, 'getsubjectchoice'])->name('admin.getsubjectchoice');
    Route::get('/documents', [App\Http\Controllers\subjectChoiceController::class, 'getDocuments'])->name('documents');
    Route::get('/uploadfile/{id}/{is}', [App\Http\Controllers\subjectChoiceController::class, 'uploadfile'])->name('uploadfile');
    Route::post('/approvestudents', [App\Http\Controllers\subjectChoiceController::class, 'approvestudent'])->name('admin.approvestudent');
    Route::post('/studentpayments', [App\Http\Controllers\paymentController::class, 'studentpayment'])->name('admin.studentpayment');
    Route::get('getsinglepayment/{id}', [App\Http\Controllers\paymentController::class, 'getSinglePayment'])->name('admin.getSinglePayment');
    Route::get('getsingletransaction/{id}', [App\Http\Controllers\paymentController::class, 'getSingleTransaction'])->name('admin.getSingleTransaction');
    Route::get('/helper', [App\Http\Controllers\helperController::class, 'helper'])->name('helper');
    Route::get("/adminexportuser", [App\Http\Controllers\adminController::class, 'export_xml'])->name('adminexportuser');
    Route::get("/addteacher", [App\Http\Controllers\teacherController::class, 'addTeacher'])->name('addteacher');
    Route::get("/viewteacher", [App\Http\Controllers\teacherController::class, 'viewteacher'])->name('viewteacher');
});

Route::group(['middleware'=>'student'], function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('student.home');
});

Auth::routes();

