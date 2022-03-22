<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'amber user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user123'),
            'role' => 1
        ]);

        User::create([
            'name' => 'amber admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'role' => 2
        ]);

        User::create([
            'name' => 'amber super',
            'email' => 'super@gmail.com',
            'password' => Hash::make('super123'),
            'role' => 3
        ]);
    }
}
