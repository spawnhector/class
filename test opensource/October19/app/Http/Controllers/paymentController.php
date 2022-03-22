<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Payment_history;
use App\Models\Subject;
use App\Models\Transaction;
use Illuminate\Http\Request;

class paymentController extends Controller
{
    public function studentpayment(Request $request){
        $check = Payment::where('student_id','=',$request->student_id)->where('subject_id','=',$request->subject_id)->orderBy('date_payed','desc')->first();

        $subject = Subject::where('id','=',$request->subject_id)->first();
        if ($check == null) {
            
            $balance = $subject->cost_amt - $request->amount_payed;
            $pay = Payment::create([
                'student_id'=> $request->student_id,
                'subject_id'=> $request->subject_id,
                'amount_payed'=> $request->amount_payed,
                'balance_amt'=> $balance
            ]);

            if ($balance == 0) {
                $description = 'paid off';
            } else {
                $description = 'payment plan';
            }
            
            $payHistory = Payment_history::create([
                'student_id'=>$request->student_id,
                'payment_amt'=>$request->amount_payed,
                'description'=>$description
            ]);

            $transaction = Transaction::create([
                'student_id'=>$request->student_id,
                'subject_id'=> $request->subject_id,
                'amount_due'=>$subject->cost_amt,
                'amount_payed'=>$request->amount_payed,
                'balance_amt'=>$balance,
                'year_of_exam'=>$request->year_of_exam
            ]);

            return redirect()->route('admin.getsubjectchoice');

        } else {

            $check->toArray();
            $balance = $check['balance_amt'] - $request->amount_payed;
            $pay = Payment::find($check['id']);
            $pay->student_id = $request->student_id;
            $pay->subject_id = $request->subject_id;
            $pay->amount_payed = $request->amount_payed + $check['amount_payed'];
            $pay->balance_amt = $balance;
            $pay->save();

            if ($balance == 0) {
                $description = 'paid off';
            } else {
                $description = 'payment plan';
            }
            
            $payHistory = Payment_history::create([
                'student_id'=>$request->student_id,
                'payment_amt'=>$request->amount_payed,
                'description'=>$description
            ]);

            $transaction = Transaction::create([
                'student_id'=>$request->student_id,
                'subject_id'=> $request->subject_id,
                'amount_due'=>$subject->cost_amt,
                'amount_payed'=>$request->amount_payed,
                'balance_amt'=>$balance,
                'year_of_exam'=>$request->year_of_exam
            ]);

            return redirect()->route('admin.getsubjectchoice');
        }
        
    }

    public function getSinglePayment($id){
        return view('admin.single-payment',['user'=>$id]);
    }

    public function getSingleTransaction($id){
        return view('admin.single-transaction',['user'=>$id]);
    }
}
