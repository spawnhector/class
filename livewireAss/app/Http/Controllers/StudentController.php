<?php

namespace App\Http\Controllers;

use App\Models\phone_number;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    
    public function addStudent(){
        return view('admin.addstudent');
    }

    public function getStudent($id){
        return view('admin.view-student',[
            'user_id'=>$id
        ]);
    }
    
    public function editStudent($id){
        return view('admin.edit-student',[
            'user_id'=>$id
        ]);
    }

    public function addNumber(){
        return view('admin.addnumber');
    }

    public function editNumber($id){
        $person = phone_number::find($id);
        return view('admin.editnumber',[
            'person'=>$person
        ]);
    }

    public function dropDown(){
        return view('admin.dropdown');
    }

}

