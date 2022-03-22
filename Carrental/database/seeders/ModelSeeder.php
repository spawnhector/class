<?php

namespace Database\Seeders;

use App\Models\models;
use Illuminate\Database\Seeder;

class ModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        models::Create([
            'model_type'=> 'car',
            'model_nm'=> 'BMW',
            'model_slug'=> 'bmw'
        ]);
        models::Create([
            'model_type'=> 'car',
            'model_nm'=> 'AUDI',
            'model_slug'=> 'audi'
        ]);
        models::Create([
            'model_type'=> 'car',
            'model_nm'=> 'MERCEDES-BENZ',
            'model_slug'=> 'mercedes-benz'
        ]);
        models::Create([
            'model_type'=> 'car',
            'model_nm'=> 'PORSHE',
            'model_slug'=> 'porshe'
        ]);
        models::Create([
            'model_type'=> 'car',
            'model_nm'=> 'LEXUS',
            'model_slug'=> 'lexus'
        ]);
        models::Create([
            'model_type'=> 'car',
            'model_nm'=> 'FERRARI',
            'model_slug'=> 'ferrari'
        ]);
        models::Create([
            'model_type'=> 'car',
            'model_nm'=> 'BENTLEY',
            'model_slug'=> 'bentley'
        ]);
        models::Create([
            'model_type'=> 'car',
            'model_nm'=> 'LAND ROVER',
            'model_slug'=> 'land-rover'
        ]);
        models::Create([
            'model_type'=> 'car',
            'model_nm'=> 'DODGE',
            'model_slug'=> 'dodge'
        ]);
        models::Create([
            'model_type'=> 'car',
            'model_nm'=> 'JAGUAR',
            'model_slug'=> 'jaguar'
        ]);
    }
}
