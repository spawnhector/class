<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\User;

class PagesController extends Controller
{
    public function admin_profile(){
        $users = User::get();
        $admin = Admin::get();
        return view('myprofileadmin',['users'=>$users,'admin'=>$admin]);
    }

    public function admin_profile_modal(Request $request){
        if($request->has('update')){
            $title = "Update";
            $show_model = User::where('id','=',$request->update)->get();
            $users = User::get();
            $admin = Admin::get();
            return view('myprofileadmin',['users'=>$users,'admin'=>$admin,'show_model'=>$show_model,'title'=>$title]);
        }elseif($request->has('delete_user')){
            $title = "Delete";
            $show_model = User::where('id','=',$request->delete_user)->get();
            $users = User::get();
            $admin = Admin::get();
            return view('myprofileadmin',['users'=>$users,'admin'=>$admin,'show_model'=>$show_model,'title'=>$title]);
        }elseif($request->has('close')){
            $show_model = "";
            $users = User::get();
            $admin = Admin::get();
            return view('myprofileadmin',['users'=>$users,'admin'=>$admin,'show_model'=>$show_model]);
        }elseif($request->has('delete')){
            $show_model = "";
            dd($request->delete);
            $data = User::find($request->delete);
            $data->delete();
            $users = User::get();
            $admin = Admin::get();
            return view('myprofileadmin',['users'=>$users,'admin'=>$admin,'show_model'=>$show_model]);
        }
    }
    public function admin_profile_modal_admin(Request $request){
        if($request->has('update')){
            $title = "Update";
            $show_model = Admin::where('id','=',$request->update)->get();
            $users = User::get();
            $admin = Admin::get();
            return view('myprofileadmin',['users'=>$users,'admin'=>$admin,'show_model'=>$show_model,'title'=>$title]);
        }elseif($request->has('delete_user')){
            $title = "Delete";
            $show_model = Admin::where('id','=',$request->delete_user)->get();
            $users = User::get();
            $admin = Admin::get();
            return view('myprofileadmin',['users'=>$users,'admin'=>$admin,'show_model'=>$show_model,'title'=>$title]);
        }elseif($request->has('close')){
            $show_model = "";
            $users = User::get();
            $admin = Admin::get();
            return view('myprofileadmin',['users'=>$users,'admin'=>$admin,'show_model'=>$show_model]);
        }elseif($request->has('delete')){
            $show_model = "";
            $data = Admin::find($request->delete);
            $data->delete();
            $users = User::get();
            $admin = Admin::get();
            return view('myprofileadmin',['users'=>$users,'admin'=>$admin,'show_model'=>$show_model]);
        }
    }
    
}
