<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mealCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_nm',
        'category_desc'
    ];

    public function mealType(){
        return $this->hasMany(mealType::class);
    }
}
