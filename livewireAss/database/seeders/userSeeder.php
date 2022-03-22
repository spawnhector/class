<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate(['id' => 1], ['name' => 'admin', 'email' => 'admin@gmail.com', 'password' => password_hash('123456', PASSWORD_BCRYPT)]);
    }
}
