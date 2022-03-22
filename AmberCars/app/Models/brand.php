<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'brand_nm',
        'brand_desc'
    ];

    public function vehicle_type(){
        return $this->hasMany(vehicle_type::class);
    }
}
