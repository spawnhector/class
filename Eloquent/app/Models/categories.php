<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{   
    use HasFactory;

    protected $fillable = [
        'category_nm',
        'category_desc'
    ];

    public function products(){
        return $this->hasMany(products::class);
    }

}
