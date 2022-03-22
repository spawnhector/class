<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Subject;
use App\Models\SubjectChoice;
use Illuminate\Http\Request;

class studentController extends Controller
{
    public function addStudent(Request $request){
        // dd($request);
        $gender = '';
        if ($request->has('male')) {
            $gender = 'male';
        } elseif ($request->has('female')) {
            $gender = 'female';
        }
        $store = Student::create([
            'first_nm' => $request->first_nm,
            'last_nm' => $request->last_nm,
            'dob' =>  $request->dob,
            'class' =>  $request->class,
            'phone' =>  $request->number,
            'email' =>  $request->email,
            'gender' => $gender,
        ]);

        return redirect()->back();
    }

    public function getStudent(){

        // $test = SubjectChoice::all();
        // foreach ($test as $key => $value) {
        //     dd($value->subject->subject_nm);
        // }
        $info = Student::paginate(5);
        $subject = SubjectChoice::all()->toArray();
        return response()->json([
            'info'=> $info,
            'subject'=>$subject
        ]);
    }

    public function customPaginate(Request $request){

        $info = Student::paginate($perPage = 5, $columns = ['*'], $pageName = 'page', $page = $request->id);
        $subject = SubjectChoice::all()->toArray();

        return response()->json([
            'info'=> $info,
            'subject'=>$subject
        ]);
    }

    function editstudent(Request $request){
        $info  = Student::find($request->id);
        return response()->json([
            'info' => $info
        ]);
    }

    public function updateStudent(Request $request){
        // dd($request);
        $info  = Student::find($request->id);
        $gender = '';
        if ($request->has('male')) {
            $gender = 'male';
        } elseif ($request->has('female')) {
            $gender = 'female';
        }
        $info->first_nm = $request->first_nm;
        $info->last_nm = $request->last_nm;
        $info->dob =  $request->dob;
        $info->class =  $request->class;
        $info->phone =  $request->number;
        $info->email =  $request->email;
        $info->gender = $gender;
        $info->save();
        return redirect()->route('admin.home');
    }

    public function deletestudent(Request $request){
        $student = Student::find($request->id);
        $student->delete();
        $subject = SubjectChoice::all()->toArray();
        
        $info = Student::paginate(5);
        return response()->json([
            'info' => $info,
            'subject'=>$subject
        ]);
    }

    public function viewstudent($id){
        return view('admin.view-student',[
            'user'=>$id
        ]);
    }

}
