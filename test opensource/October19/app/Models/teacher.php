<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'teacher_nm',
        'subject_id',
        'password'
    ];

    public function student(){
        return $this->hasMany(teacher_student::class);
    }

    public function subject(){
        return $this->hasMany(Subject::class,'id','subject_id');
    }
}