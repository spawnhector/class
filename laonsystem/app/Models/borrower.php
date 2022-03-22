<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class borrower extends Model
{
    use HasFactory;

    protected $fillable = [
        'loan_amount',
        'branch_id',
        'loan_type',
        'employeer_name',
        'employment_duration',
        'full_nm',
        'trn',
        'number',
        'email',
        'identity',
        'pay_slip',
        'poa',
        'job_letter',
    ];

    public function branch(){
        return $this->belongsTo(branch::class,'branch_id');
    }

    public function interview(){
        return $this->hasMany(interview::class);
    }
}
