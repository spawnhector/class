<?php

namespace Database\Seeders;

use App\Models\dealer;
use Illuminate\Database\Seeder;

class DealerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        dealer::Create([
            'first_name' => 'Ronald',
            'last_name' => 'Hector',
            'location' => 'Grant hill district, lawrence tavern, saint andrew',
            'email' => 'test2@test.com',
            'long' => -76.85067004653484,
            'lat' => 18.137493551125345,
            'phone' => '18768414256',
            'company' => 'Amber',
            'country' => 'Jamaica',
            'state' => 'kingston',
            'town' => 'lawrence tavern',
        ]);
        dealer::Create([
            'first_name' => 'Shamar',
            'last_name' => 'Stewart',
            'location' => 'Grant hill district, lawrence tavern, saint andrew',
            'email' => 'test3@test.com',
            'long' => -76.89455243406272,
            'lat' => 18.21527983510745,
            'phone' => '18768414256',
            'company' => 'Amber',
            'country' => 'Jamaica',
            'state' => 'clarendon',
            'town' => 'cane heap',
        ]);
        dealer::Create([
            'first_name' => 'Ricardo',
            'last_name' => 'Hibbert',
            'location' => 'Grant hill district, lawrence tavern, saint andrew',
            'email' => 'test4@test.com',
            'long' => -77.3747730540022,
            'lat' => 18.38987295462423,
            'phone' => '18768414256',
            'company' => 'Amber',
            'country' => 'Jamaica',
            'state' => 'Saint Ann',
            'town' => 'browns town',
        ]);
    }
}
