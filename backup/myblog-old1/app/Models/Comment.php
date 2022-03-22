<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $guarded = [];

    protected $fillable = [
        'id',
        'user_id',
        "title",
        'content',
        'image',
        'slug',
        'post_id',
        'created_at'
    ];

    protected $table = 'comments';

    public function posts(){
        return $this->belongsTo('App\Models\Post');
    }
    public function reply(){
        return $this->hasMany('App\Models\Reply');
    }
    use HasFactory;
}


