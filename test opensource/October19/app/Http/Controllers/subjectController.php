<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class subjectController extends Controller
{
    
    public function addsubject(Request $request){
        // dd($request);
        $subject = new Subject;
        $subject->subject_nm = $request->subject_nm;
        $subject->cost_amt = $request->subject_price;
        $subject->save();

        return redirect()->route('admin.home');
    }

    public function getsubject(){

        $info = Subject::paginate(5);

        return response()->json([
            'info'=> $info
        ]);
    }

    public function editsubject(Request $request){
        $info = Subject::find($request->id);
        return response()->json([
            'info'=> $info
        ]);
    }

    public function updatesubject(Request $request){

        $subject = Subject::find($request->id);
        $subject->subject_nm = $request->subject_nm;
        $subject->cost_amt = $request->subject_price;
        $subject->save();

        return redirect()->route('admin.home');
    }

    public function deletesubject(Request $request){
        $student = Subject::find($request->id);
        $student->delete();
        
        $info = Subject::paginate(5);
        return response()->json([
            'info' => $info,
            'id' => $request->id
        ]);
    }

    public function customPaginate(Request $request){

        $info = Subject::paginate($perPage = 5, $columns = ['*'], $pageName = 'page', $page = $request->id);

        return response()->json([
            'info'=> $info
        ]);
    }

    public function getsubjectall(){
        $info = Subject::all();

        return response()->json([
            'info'=> $info
        ]);
    }
}
