<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class models extends Model
{
    use HasFactory;

    public function vehicle(){
        return $this->hasMany(vehicles::class);
    }
}
