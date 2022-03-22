<?php

namespace App\Http\Controllers;

use App\Models\documents;
use App\Models\Student;
use App\Models\SubjectChoice;
use Illuminate\Http\Request;

class subjectChoiceController extends Controller
{
    public function addstudentsubject(Request $request){
        SubjectChoice::create([
            
            'student_id'=> $request->student_id,
            'subject_id'=> $request->subject_id,
            'year_of_exam'=> $request->year_of_exam
        ]);
        return redirect()->route('admin.home');
    }


    public function getsubjectchoice(){
        $info = SubjectChoice::paginate(5);
        
        return view('admin.subjectchoice',[
            'paginate' => $info,
            'info' => $info->toJSON()
        ]);
    }

    public function approvestudent(Request $request){
        $store = SubjectChoice::find($request->id);
        $store->status = '1';
        $store->save();
        return response()->json([
            'info' => "APPROVED"
        ]);
    }

    public function getDocuments(){
        return view('admin.documents');
    }

    public function uploadfile($id,$is){
        $file = documents::create([
            'student_id' => $id,
            'subject_id' => $is,
            'file_upload' => '1',
        ]);

        return redirect()->route('documents');
    }
}
