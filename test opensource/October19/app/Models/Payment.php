<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'subject_id',
        'amount_payed',
        'balance_amt',

    ];

    public function payment(){
        return $this->hasMany(Payment::class,'student_id','id');
    }
    
}
