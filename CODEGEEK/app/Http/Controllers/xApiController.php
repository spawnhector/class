<?php

namespace App\Http\Controllers;

use App\Mail\welcomeMail;
use App\student;
use Illuminate\Http\Request;
use App\User;
use App\verifyCode;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class xApiController extends Controller
{
    public function username($info){
        $checkInfo = DB::select('select * from students where student_username = ?', [$info]);
        if (count($checkInfo) == 0) {
            return response(
                $data = 'Username Not Registered'
            );
        } else {
            return response(
                $data = 'pass'
            );
        }
    }

    public function password($info,$username){
        $getUser = student::where('student_username','=',$username)->get();
        foreach ($getUser as $name) {
            if(!Hash::check($info, $name->password)){
                return response(
                    $data = 'Password Incorrect'
                );
            }else{
                return response(
                    $data = 'pass'
                );
            }
        }
        // $checkInfo = DB::select('select * from students where password = ?', [$info]);
        // if (count($checkInfo) == 0) {
        // } else {
        // }
    }

    public function confirmcode($email,$name){
        $code = "";
        for ($i=0; $i < 6; $i++) { 
            $code .= rand(0,9);
        }
        $detail = [
            "name" => $name,
            "code" => $code
        ];

        $store = new verifyCode();
        $store->email = $email;
        $store->verification_code = $code;
        $store->save();
        Mail::to($email)->send(new welcomeMail($detail));
        return response(
            $data = "sent"
        );
    }

    public function checkCode($email,$code){
        $getCode = verifyCode::where('email','=',$email)->get();
        foreach ($getCode as $userCode ) {
            if ($userCode->verification_code === $code) {
                $delete = verifyCode::find($userCode->id);
                $delete->delete();
                return response(
                    $data = "verified"
                );
            }else{
                return response(
                    $data = "not-verified"
                );
            }
        }
    }

    public function register(Request $request){
        $store = new student;
        $store->student_name = $request->full_name;
        $store->student_username = $request->username;
        $store->student_country = $request->country;
        $store->student_phone = $request->phone;
        $store->student_email = $request->email;
        $store->password = Hash::make($request->password);
        if ($store->save()) {
            return response()->json( [ 'success' => "registered" ] );
        } else {
            return response()->json( [ 'error' => "error: something went wrong" ] );
        }
    }
}
