<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function home(){
        return view('home');
    }

    public static function generateRoute($request){
        $userName = $request->session()->get('LoggedUserName');
        $date = now();
        $surveyLink = $userName.'-'.$date;
        $url = url("survey/".$surveyLink."");

        return $url;
    }

    public function autoroute(Request $request){

        return redirect()->back()->with([
            'success' => 'your survey link is '.$this->generateRoute($request)
        ]);
    }

    public function getautoroute(Request $request){

        return view('autoroute',[
            'request'=>$request
        ]);
    }
}
