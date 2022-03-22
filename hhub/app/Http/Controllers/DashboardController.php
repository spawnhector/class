<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{

    
   public function index()
   {
       if(Auth::user()->hasRole('user')){
            return view('userdash');
       }elseif(Auth::user()->hasRole('blogwriter')){
            return view('blogwriterdash');
       }elseif(Auth::user()->hasRole('admin')){
            return view('admindashboard');
        }
   }

   public function myprofile()
   {
    return view('myprofile');
   }

   public function show(Request $request,$slug)
   {
       if($slug == 'Post'){
           return view($slug,['post' => Post::orderBy('created_at','desc')->get(),'user' => User::get()]);
       }
        
   }
}
