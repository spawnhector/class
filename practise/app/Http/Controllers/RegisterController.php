<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
class RegisterController extends Controller
{
    public function register(){
        return view('register');
    }

    public function register_admin(){
        return view('registeradmin');
    }

    public function register_user(Request $request){
        if($request->validate(['name' => 'required','email' => 'required','password' => 'required','confirm-password'=>'required|same:password'])){
            $user = new User;
            $user->name = $request->name;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
            return view('login');
        }
        
    }

    public function register_admin_new(Request $request){
        if($request->validate(['name' => 'required','email' => 'required','password' => 'required','confirm-password'=>'required|same:password'])){
            $user = new Admin;
            $user->name = $request->name;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
            return view('loginadmin');
        }
        
    }
}
