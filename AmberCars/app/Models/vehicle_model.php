<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicle_model extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'vhcl_model_nm',
        'year',
        'color',
        'cost', 
        'condition',
        'mileage', 
        'capacity',
        'driver_side', 
        'trans_type',
        'vehicle_type_id'
    ];

    public function vehicle_model(){
        return $this->belongsToMany(vehicle_type::class);
    }
}
