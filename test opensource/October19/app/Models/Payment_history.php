<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment_history extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'payment_amt',
        'description'

    ];

    public function subjectChoice(){
        return $this->hasMany(SubjectChoice::class,'student_id','id');
    }
    
    public function student(){
        return $this->belongsTo(Student::class,'student_id','id');
    }
}
