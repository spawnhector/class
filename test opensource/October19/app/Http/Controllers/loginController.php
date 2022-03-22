<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function login(Request $request){
        $details = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($details)) {
            if (Auth::user()->is_admin == '1') {
                return redirect()->route('admin.home');
            } else {
                return redirect()->route('student.home');
            }
            
        } else {
            return redirect()->back()->with(
                'error', 'Incorrect Credientials'
            );
        }
        
    }
}
