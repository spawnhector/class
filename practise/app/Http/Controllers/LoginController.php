<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function login_login(){
        return view('loginadmin');
    }

    public function login_user(Request $request){
        if($request->validate(['email'=>['required', 'email'],'password'=>['required']])){
            $checkinfo = User::where('email','=',$request->email)->first();
            // ddd($checkinfo->password);
            if(!$checkinfo){
                $fail = 'Email not registered';
                return view('login',['fail'=>$fail]);
            }else{
                if(Hash::check($request->password,$checkinfo->password)){
                    $request->session()->put('LoggedUser',$checkinfo->id);
                    $request->session()->put('LoggedUserName',$checkinfo->name);
                    return view('home');
                }else{
                    $fail = 'Password is incorrect';
                    return view('login',['fail'=>$fail]);
                }
            }
        }
    }

    public function login_admin(Request $request){
        if($request->validate(['email'=>'required','password'=>'required'])){
            $checkinfo = Admin::where('email','=',$request->email)->first();
            if(!$checkinfo){
                $fail = 'Email not registered';
                return view('loginadmin',['fail'=>$fail]);
            }else{
                if(Hash::check($request->password,$checkinfo->password)){
                    $request->session()->put('LoggedUser',$checkinfo->id);
                    return view('homeadmin');
                }else{
                    $fail = 'Password is incorrect';
                    return view('loginadmin',['fail'=>$fail]);
                }
            }
        }
    }
}
