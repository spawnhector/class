<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rented extends Model
{
    protected $fillable = [
        'user_id',
        'vehicle_id',
        'pickup_location',
        'dropoff_location',
        'child_seat', 
        'gps_navigation', 
        'additional_driver', 
        'wifi_access', 
        'winter_package', 
        'bski_rack', 
        'full_insurance', 
        'pickup_date',
        'dropoff_date',
        'rented_days'
    ];

    use HasFactory;

    public function user(){
        return $this->belongsToMany(User::class,'id');
    }
}
