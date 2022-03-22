<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class documents extends Model
{
    use HasFactory;

    protected $fillable =[
        'student_id',
        'subject_id',
        'file_upload'
    ];

    public function student(){
        return $this->belongsTo(Student::class,'student_id','id');
    }

    public function subject(){
        return $this->belongsTo(Subject::class,'subject_id','id');
    }
}
