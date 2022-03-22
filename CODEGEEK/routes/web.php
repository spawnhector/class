<?php

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

 
use Illuminate\Support\Facades\Route;

 

Route::get("/admin/site/mitfarm", "home@adminsite")->name('admin/site/mitfarm');

Route::get("about", "home@about")->name('about');

Route::get("/", "home@index")->name('home');

Route::get("Contackus", "home@Contackus")->name('Contackus');
Route::get("login/username/{info}", "xApiController@username")->name('username');
Route::get("login/password/{info}/{username}", "xApiController@password")->name('password');
Route::get("register/confirmcode/{email}/{name}", "xApiController@confirmcode")->name('confirmcode');
Route::get("register/checkcode/{email}/{name}", "xApiController@checkCode")->name('checkcode');
Route::post("login/student", "StudentController@login")->name('login');
Route::post("register/student", "xApiController@register")->name('register.student');

Route::post("massage", "home@massage")->name('massage');



// Admin site service site ........................


Route::get("addservice", "ServiceController@addservice")->name('addservice');
Route::get("addsale", "ServiceController@addsale")->name('addsale');

Route::post("save_service", "ServiceController@saveservice")->name('save_service');
Route::post("save_sale", "ServiceController@savesale")->name('save_sale');
Route::post("update_sale", "ServiceController@updatesale")->name('update_sale');

Route::get("allservice", "ServiceController@allservice")->name('allservice');

Route::get("activeservice/{service_id}", "ServiceController@activeservice")->name('activeservice');

Route::get("unactiveservice/{service_id}", "ServiceController@unactiveservice")->name('unactiveservice');

Route::get("/home", "home@index")->name('home');

Route::get("deleteservice/{service_id}", "ServiceController@deleteservice")->name('deleteservice');

Route::get("Editservice/{service_id}", "ServiceController@Editservice")->name('Editservice');

Route::post("update_service/{service_id}", "ServiceController@update_service")->name('update_service');

Route::get("deteles/Page/mitfarm/{service_id}", "ServiceController@detelespage")->name('deteles/Page/mitfarm');


// Title and Tag ..................................


Route::get("titleandtag", "TitleandtagController@titleandtag")->name('titleandtag');

Route::post("save_title", "TitleandtagController@save_title")->name('save_title');





// Slider Site ...................................................?

Route::get("slider/add", "SliderController@slideradd")->name('slideradd');

Route::post("slider/save", "SliderController@slider_save")->name('slider_save');

Route::get("slider/All", "SliderController@sliderall")->name('sliderall');

Route::get("activeslider/{slider_id}", "SliderController@activeslider")->name('activeslider');

Route::get("unactiveslider/{slider_id}", "SliderController@unactiveslider")->name('unactiveslider');

Route::get("deleteslider/{slider_id}", "SliderController@deleteslider")->name('deleteslider');

Route::get("sliderEdit/{slider_id}", "SliderController@sliderEdit")->name('sliderEdit');

Route::post("slider_update/{slider_id}", "SliderController@slider_update")->name('slider_update');



// Admin Login ........................?


Route::get("Admin/Login/Page", "home@adminloginpage")->name('adminloginpage');
Route::get("Admin/register", "home@adminregister")->name('adminregister');

Route::post("admin_beshbord", "home@admin_beshbord")->name('admin_beshbord');
Route::post("admin_beshbord_register", "home@admin_beshbord_register")->name('admin_beshbord_register');

Route::get("adminlogout", "home@adminlogout")->name('adminlogout');





// Student site ......................................?


Route::post("studentapply", "StudentController@studentapply")->name('studentapply');

Route::get("apply/now/mitfarm", "StudentController@applynowmitfarm")->name('apply/now/mitfarm');
Route::get("allStudent", "StudentController@allStudent")->name('allStudent');

Route::get("deletestudent/{student_id}", "StudentController@deletestudent")->name('deletestudent');


Route::post("ApproveStudent/{student_id}", "StudentController@ApproveStudent")->name('ApproveStudent');

Route::get("asdfghjkl", "StudentController@asdfghjkl")->name('asdfghjkl');

Route::get("addBase", "StudentController@addBase")->name('addBase');

Route::post("save_Base", "StudentController@saveBase")->name('save_Base');

Route::get("AllBase", "StudentController@AllBase")->name('AllBase');

Route::get("deletebase/{base_id}", "StudentController@deletebase")->name('deletebase');

Route::get("baseEdit/{base_id}", "StudentController@baseEdit")->name('baseEdit');

Route::post("vefriy-Customers", "StudentController@vefriyCustomers")->name('vefriy-Customers');

Route::post("edit_Base/{base_id}", "StudentController@editBase")->name('edit_Base');

Route::get("basetobase/{base_name}", "StudentController@basetobase")->name('basetobase');

Route::get("Coureseconfirm/{student_id}", "StudentController@Coureseconfirm")->name('Coureseconfirm');

Route::get("Complete/{base_name}", "StudentController@Complete")->name('Complete');

 






































