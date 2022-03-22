<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicle_type extends Model
{
    use HasFactory;
   
    protected $fillable = [
        'vhcl_type_nm',
        'brand_id'
    ];

    public function brand(){
        return $this->belongsTo(brand::class);
    }
}
