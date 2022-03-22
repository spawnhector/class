<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phone_number extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'number',
    ];

    public function student(){
        return $this->belongsTo(student::class,'student_id','id');
    }
}
