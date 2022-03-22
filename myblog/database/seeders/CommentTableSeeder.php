<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create([
            'user_id' => '1',
            'title' => 'I like your thoughts',
            'content' => 'Love what you are saying honestly',
            'image' => 'posts\June2021\K11AjeyEkYJVXozaTK6E.jpg',
            'slug' => 'i-like-your-thoughts',
            'post_id' => '29',
        ]);
    }

     
}
