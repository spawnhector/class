<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use App\Models\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{

    
   public function index()
   {
    return view('admindashboard');
    //    if(Auth::user()->hasRole('user')){
    //         return view('userdash');
    //    }elseif(Auth::user()->hasRole('blogwriter')){
    //         return view('blogwriterdash');
    //    }elseif(Auth::user()->hasRole('admin')){
            
    //     }
   }

   public function myprofile()
   {
    return view('myprofile');
   }

   public function show(Request $request)
   {
     $show_comment = "";
     return view('Post',[
         'post' => Post::orderBy('created_at','desc')->get(),
         'user' => User::get(),'comments' => Comment::get(),
         'show_comment' => $show_comment
     ]); 
   }

   public function comment(Request $request)
   {
        // $show = $request->content;
        if($request->toggle_comment == NULL){
            $show_comment = ""; 
        }else{
            $show_comment = $request->toggle_comment;
        }
        return view('Post',[
        'post' => Post::orderBy('created_at','desc')->get(),
        'user' => User::get(),'comments' => Comment::get(),
        'show_comment' => $show_comment,
        'replys' => Reply::get()
        ]);  
   }

//    public function store_comment(){
//         $comments = new Comment;
//         $comments->
//    }
}
