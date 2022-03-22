<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dealer extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'location',
        'email',
        'thumbnail_url',
        'long',
        'lat',
        'phone',
        'company',
        'country',
        'state',
        'town'
    ];

    public function vehicle(){
        return $this->hasMany(vehicles::class);
    }
}
