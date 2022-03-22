<?php

use Illuminate\Support\Facades\Route;

use TCG\Voyager\Facades\Voyager;
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
// Route::get('/test', function () {
//     return view('test');
// });

$namespacePrefix = '\\'.config('voyager.controllers.namespace').'\\';

Route::get('login', ['uses' => $namespacePrefix.'VoyagerAuthController@login',     'as' => 'login']);
Route::post('login', ['uses' => $namespacePrefix.'VoyagerAuthController@postLogin', 'as' => 'postlogin']);
Route::group(['middleware' => 'auth'], function (){
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@show')->name('dashboard');
    Route::get('dashboard/active', 'App\Http\Controllers\DashboardController@active')->name('active');
    Route::get('dashboard/message', 'App\Http\Controllers\DashboardController@message')->name('message');
    Route::get('dashboard/message/{id}', 'App\Http\Controllers\DashboardController@get_message')->name('message.get');
    Route::post('dashboard/message/store', 'App\Http\Controllers\DashboardController@store_message')->name('message.store');
    Route::post('dashboard/message/reply', 'App\Http\Controllers\DashboardController@reply_message')->name('message.reply');
    Route::get('dashboard/message/chat/delete/{id}', 'App\Http\Controllers\DashboardController@delete_message_chat')->name('delete.message.chat');
    Route::post('dashboard/message/edit', 'App\Http\Controllers\DashboardController@edit_message')->name('edit.message');
    Route::get('dashboard/{id}/chat', 'App\Http\Controllers\DashboardController@chat')->name('chat');
    Route::get('dashboard/{id}/chat_id', 'App\Http\Controllers\DashboardController@get_chat_now')->name('get.chat.now');
    Route::get('dashboard/{id}/{is}/chat', 'App\Http\Controllers\DashboardController@chat_now')->name('chat.now');
    Route::post('dashboard/{id}/like', 'App\Http\Controllers\DashboardController@like')->name('like');
    Route::post('dashboard/{id}/unlike', 'App\Http\Controllers\DashboardController@unlike')->name('unlike');
    Route::get('dashboard/{id}/follow', 'App\Http\Controllers\DashboardController@follow')->name('follow');
    Route::get('dashboard/{id}/unfollow', 'App\Http\Controllers\DashboardController@unfollow')->name('unfollow');
    Route::post('dashboard/{id}/friend', 'App\Http\Controllers\DashboardController@friend')->name('friend');
    Route::get('dashboard/{id}/confirm-friend', 'App\Http\Controllers\DashboardController@toconfirmfriend')->name('toconfirmfriend');
    Route::get('dashboard/{id}/search', 'App\Http\Controllers\DashboardController@search')->name('search');
    Route::get('dashboard/Post', 'App\Http\Controllers\DashboardController@index')->name('dashboard.show');
    Route::get('dashboard/count-tags/{id}', 'App\Http\Controllers\DashboardController@count_tags')->name('count.tags');
    Route::get('dashboard/show-post/{id}/{is}', 'App\Http\Controllers\DashboardController@noty_show_post')->name('noty.show.post');
    Route::get('dashboard/show-popular/{id}', 'App\Http\Controllers\DashboardController@show_popular')->name('show.popular');
    Route::get('dashboard/show-posts/{id}/{is}', 'App\Http\Controllers\DashboardController@show_post')->name('show-post');
    Route::get('dashboard/show-posts-comment/{id}/{ig}/{is}', 'App\Http\Controllers\DashboardController@show_post_comment')->name('show.post.comment');
    Route::get('dashboard/show-searchpost/{id}/{is}', 'App\Http\Controllers\DashboardController@show_searchpost')->name('show.searchpost');
    Route::get('dashboard/get_post_comment/{id}/{is}', 'App\Http\Controllers\DashboardController@get_post_comment')->name('get.post.comment');
    Route::get('dashboard/show-comment/{id}/{is}', 'App\Http\Controllers\DashboardController@show_comment')->name('show.comment');
    Route::get('/dashboard/profile', 'App\Http\Controllers\DashboardController@myprofile')->name('profile.vew');
    Route::get('/dashboard/{id}/profile', 'App\Http\Controllers\DashboardController@viewprofile')->name('profile');
    Route::get('/dashboard/confirm-friend/{id}/{is}/', 'App\Http\Controllers\DashboardController@confirmfriend')->name('confirmfriend');
    Route::post('dashboard/Post/comment', 'App\Http\Controllers\DashboardController@post')->name('dashboard.comment');
    Route::get('dashboard/Post/create', 'App\Http\Controllers\DashboardController@create_post')->name('dashboard.create');
    Route::post('dashboard/Post/create/new', 'App\Http\Controllers\DashboardController@create_post')->name('dashboard.create.new');
    Route::post('dashboard/Post/update/{ir}', 'App\Http\Controllers\DashboardController@edit_post')->name('dashboard.post.update');
    Route::get('dashboard/Post/edit/{ir}', 'App\Http\Controllers\DashboardController@edit_post')->name('post-edit');
    Route::post('/logout', 'App\Http\Controllers\DashboardController@logout')->name('logout');
});
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


Route::group(['middleware' => ['auth:sanctum', 'verified']], function() {
    // Route::group(['Prefix' => '/dashboard'],function(){
    // });
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
