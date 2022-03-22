<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    public function subjectChoice(){
        return $this->hasMany(SubjectChoice::class,'subject_id','id');
    }
}
