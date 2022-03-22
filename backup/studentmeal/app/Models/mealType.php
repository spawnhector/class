<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mealType extends Model
{
    use HasFactory;

    protected $fillable = [
        'mealtype_nm',
        'price_amt',
        'category_id'
    ];

    public function mealCategory(){
        return $this->belongsTo(mealCategory::class);
    }
}
