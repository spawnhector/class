<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;

    protected $fillable = [
        'products_nm',
        'price_amt',
        'category_id'
    ];

    public function products(){
        return $this->belongsTo(categories::class);
    }
}
