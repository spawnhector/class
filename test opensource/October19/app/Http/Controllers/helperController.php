<?php

namespace App\Http\Controllers;

// use App\Models\Payment;

use App\Models\Payment;
use App\Models\Payment_history;
use App\Models\Student;
use App\Models\Subject;
use App\Models\SubjectChoice;
use App\Models\Transaction;
use Illuminate\Http\Request;

class helperController extends Controller
{

    public function helper(){
        return view('helper');
    }

    
    // public function getsubjectchoicedd(){
    //     $info = SubjectChoice::paginate(5);
        
    //     return $info->toJSON();
    // }

    public function getStudent(){
        return Student::all();
    }

    public function getSubjectChoiceById($id){
        return SubjectChoice::find($id);
    }

    public function getSubjectChoice(){
        return SubjectChoice::all();
    }

    public function countSubjectChoice($student_id,$subject_id){
        return count(SubjectChoice::where('student_id','=',$student_id)->where('subject_id','=',$subject_id)->get());
    }

    public function getPayment(){
        return Payment::all();
    }

    public function getPaymentHistory(){
        return Payment_history::all();
    }

    public function getTransactions(){
        return Transaction::all();
    }

    public function studentTransactionAmount($student_id,$subject_id){
        return count(Transaction::where('student_id','=',$student_id)->where('subject_id','=',$subject_id)->get());
    }

    
}
