<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicles extends Model
{
    use HasFactory;

    public function dealer(){
        return $this->belongsTo(dealer::class);
    }

    public function model(){
        return $this->belongsTo(models::class);
    }
}
