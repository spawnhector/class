<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class SubjectChoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'subject_id',
        'status',
        'year_of_exam',

    ];

    public function student(){
        return $this->belongsTo(Student::class,'student_id','id');
    }

    public function subject(){
        return $this->belongsTo(Subject::class,'subject_id','id');
    }

    public function payment(){
        return $this->belongsTo(Payment::class,'subject_id');
    }

    public function balanceOwed($student_id,$subject_id){
        $payment = Payment::where('student_id','=',$student_id)->where('subject_id','=',$subject_id)->first();
        
        if ($payment) {
            $owed = $payment->balance_amt;
        } else {
            $owed = $this->subject->cost_amt;
        }
        
        return $owed;
    }

    public function amountPaid($student_id,$subject_id){

        $payment = Payment::where('student_id','=',$student_id)->where('subject_id','=',$subject_id)->first();

        if ($payment) {
            return $payment->amount_payed;
        }else{
            return 0;
        }

    }

    public function getSubject(){
        
    }

    public function paymentHistory(){
        return $this->belongsTo(Payment_history::class,'subject_id');
    }

    public function transaction(){
        return $this->belongsTo(Transaction::class,'subject_id','id');
    }
}
