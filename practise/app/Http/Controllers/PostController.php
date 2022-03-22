<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function post(){
        return view('post');
    }
    public function postcreate(Request $request){
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        $title = $request->title;
        $content = $request->content;
        $user = auth()->user();
         return view('post',[
            'title' => $title,
            'content' => $content,
            'user' => $user
        ]);
    }
}
