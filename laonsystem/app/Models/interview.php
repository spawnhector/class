<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class interview extends Model
{
    use HasFactory;
    protected $fillable = [
        'borrower_id',
        'start_date',
        'end_date',
        'start_time',
        'end_time',
        'meeting_url',
        'meeting_pass',
    ];
    public function borrower(){
        return $this->belongsTo(borrower::class,'borrower_id');
    }
}
