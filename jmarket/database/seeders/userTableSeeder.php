<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            // admin
            [
                'full_name'=>'jmarket admin',
                'username'=>'jadmin',
                'email'=>'jadmin@jmarket.com',
                'password'=>Hash::make('111'),
                'role'=>'admin',
                'status'=>'active',
            ],

            // vendor
            [
                'full_name'=>'jmarket vendor',
                'username'=>'jvendor',
                'email'=>'jvendor@jmarket.com',
                'password'=>Hash::make('111'),
                'role'=>'vendor',
                'status'=>'active',
            ],

            // customer
            [
                'full_name'=>'jmarket customer',
                'username'=>'jcustomer',
                'email'=>'jcustomer@jmarket.com',
                'password'=>Hash::make('111'),
                'role'=>'customer',
                'status'=>'active',
            ]
        ]);
    }
}
