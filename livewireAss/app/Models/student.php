<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    protected $fillable = [
        'fisrt_nm',
        'last_nm',
        'dob',
        'email',
    ];

    public function phone_number(){
        return $this->hasMany(phone_number::class,'student_id','id');
    }
}
