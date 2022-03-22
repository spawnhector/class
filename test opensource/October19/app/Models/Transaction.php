<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'subject_id',
        'amount_due',
        'amount_payed',
        'balance_amt',
        'year_of_exam'

    ];

    public function subjectChoice(){
        return $this->hasMany(SubjectChoice::class,'student_id','id');
    }

    public function student(){
        return $this->hasMany(Student::class,'id');
    }
    public function subject(){
        return $this->hasMany(Subject::class,'id');
    }
}
