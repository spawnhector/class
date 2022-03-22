<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    public function logout(){
        Auth::logout();
        return view('welcome');
    }
}
