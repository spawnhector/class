<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class teacherController extends Controller
{
    public function addTeacher(){
        return view('admin.addteacher');
    }
    
    public function viewteacher(){
        return view('admin.viewteacher');
    }
}
