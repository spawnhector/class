<?php

namespace App\Models;

use App\Http\Controllers\transactionController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'first_nm',
        'last_nm',
        'dob',
        'class',
        'phone',
        'email',
        'gender',

    ];

    public function subjectChoice(){
        return $this->hasMany(SubjectChoice::class,'subject_id','id');
    }

    public function payment(){
        return $this->hasMany(Payment::class,'subject_id','id');
    }

    public function paymentHistories(){
        return $this->hasMany(Payment_history::class,'student_id','id');
    }

    public function transaction(){
        return $this->hasMany(transactionController::class,'student_id','id');
    }
    
}
