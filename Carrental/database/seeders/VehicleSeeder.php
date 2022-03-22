<?php

namespace Database\Seeders;

use App\Models\vehicles;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        vehicles::Create([
            'dealer_id' => rand(1,3),
            'model_id' => rand(1,10),
            'price' => rand(100,400),
            'name' => 'AG MC FORD RAPTOR',
            'year' => '2010',
            'fuel' => 'Petrol+CNG',
            'horsepowe' => rand(100,200),
            'condition' => 'Driver',
            'mileage' => '4567',
            'engine' => '1900 cm3',
            'drive' => '4x4',
            'status' => '1',
            'description' => 'This 2018 model car is Brilliant Black Crystal Pearlcoat with a Black/Diesel Gray interior. Buy confidence knowing Jeep Dodge Ram Surprise has been exceeding customer expectations for many years and always provide customers with a great value!
            Sit amet consectetura dipisicing elit dui sed eiusmod ciltempor incididunt uet labore uset dolore magna aliqua minim veniam quisnostrud exercitation. Slamco em laborisa aliquip ex ea comdo consequat uis sed auted irure rehenderit voluptate velit esse cillum doloreu fugiat nulla sed pariatura ipsum dolor am consecteu adipis elit sed do eiusmod tempora incididunt. Lorem ipsum dolor sitamet, consectetur adipisicing elit sedo eius tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea comodo consequat aute irure reprehen deritin voluptate velit esse cillum dolore eu fugiat nula pariatur excepteur sint cupidatat no proident sunt in culpa qui officia deserunt mollit anim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation',
        ]);
        vehicles::Create([
            'dealer_id' => rand(1,3),
            'model_id' => rand(1,10),
            'price' => rand(100,400),
            'name' => 'FORD MUSTANG GT',
            'year' => '2010',
            'fuel' => 'Petrol+CNG',
            'horsepowe' => rand(100,200),
            'condition' => 'Driver',
            'mileage' => '4567',
            'engine' => '1900 cm3',
            'drive' => '4x4',
            'status' => '1',
            'description' => 'This 2018 model car is Brilliant Black Crystal Pearlcoat with a Black/Diesel Gray interior. Buy confidence knowing Jeep Dodge Ram Surprise has been exceeding customer expectations for many years and always provide customers with a great value!
            Sit amet consectetura dipisicing elit dui sed eiusmod ciltempor incididunt uet labore uset dolore magna aliqua minim veniam quisnostrud exercitation. Slamco em laborisa aliquip ex ea comdo consequat uis sed auted irure rehenderit voluptate velit esse cillum doloreu fugiat nulla sed pariatura ipsum dolor am consecteu adipis elit sed do eiusmod tempora incididunt. Lorem ipsum dolor sitamet, consectetur adipisicing elit sedo eius tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea comodo consequat aute irure reprehen deritin voluptate velit esse cillum dolore eu fugiat nula pariatur excepteur sint cupidatat no proident sunt in culpa qui officia deserunt mollit anim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation',
        ]);
        vehicles::Create([
            'dealer_id' => rand(1,3),
            'model_id' => rand(1,10),
            'price' => rand(100,400),
            'name' => 'FORD ECOBOOST',
            'year' => '2010',
            'fuel' => 'Petrol+CNG',
            'horsepowe' => rand(100,200),
            'condition' => 'Driver',
            'mileage' => '4567',
            'engine' => '1900 cm3',
            'drive' => '4x4',
            'status' => '1',
            'description' => 'This 2018 model car is Brilliant Black Crystal Pearlcoat with a Black/Diesel Gray interior. Buy confidence knowing Jeep Dodge Ram Surprise has been exceeding customer expectations for many years and always provide customers with a great value!
            Sit amet consectetura dipisicing elit dui sed eiusmod ciltempor incididunt uet labore uset dolore magna aliqua minim veniam quisnostrud exercitation. Slamco em laborisa aliquip ex ea comdo consequat uis sed auted irure rehenderit voluptate velit esse cillum doloreu fugiat nulla sed pariatura ipsum dolor am consecteu adipis elit sed do eiusmod tempora incididunt. Lorem ipsum dolor sitamet, consectetur adipisicing elit sedo eius tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea comodo consequat aute irure reprehen deritin voluptate velit esse cillum dolore eu fugiat nula pariatur excepteur sint cupidatat no proident sunt in culpa qui officia deserunt mollit anim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation',
        ]);
        vehicles::Create([
            'dealer_id' => rand(1,3),
            'model_id' => rand(1,10),
            'price' => rand(100,400),
            'name' => 'FORD FASTBACK',
            'year' => '2010',
            'fuel' => 'Petrol+CNG',
            'horsepowe' => rand(100,200),
            'condition' => 'Driver',
            'mileage' => '4567',
            'engine' => '1900 cm3',
            'drive' => '4x4',
            'status' => '1',
            'description' => 'This 2018 model car is Brilliant Black Crystal Pearlcoat with a Black/Diesel Gray interior. Buy confidence knowing Jeep Dodge Ram Surprise has been exceeding customer expectations for many years and always provide customers with a great value!
            Sit amet consectetura dipisicing elit dui sed eiusmod ciltempor incididunt uet labore uset dolore magna aliqua minim veniam quisnostrud exercitation. Slamco em laborisa aliquip ex ea comdo consequat uis sed auted irure rehenderit voluptate velit esse cillum doloreu fugiat nulla sed pariatura ipsum dolor am consecteu adipis elit sed do eiusmod tempora incididunt. Lorem ipsum dolor sitamet, consectetur adipisicing elit sedo eius tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea comodo consequat aute irure reprehen deritin voluptate velit esse cillum dolore eu fugiat nula pariatur excepteur sint cupidatat no proident sunt in culpa qui officia deserunt mollit anim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation',
        ]);
        vehicles::Create([
            'dealer_id' => rand(1,3),
            'model_id' => rand(1,10),
            'price' => rand(100,400),
            'name' => 'DODGE CHARGET',
            'year' => '2010',
            'fuel' => 'Petrol+CNG',
            'horsepowe' => rand(100,200),
            'condition' => 'Driver',
            'mileage' => '4567',
            'engine' => '1900 cm3',
            'drive' => '4x4',
            'status' => '1',
            'description' => 'This 2018 model car is Brilliant Black Crystal Pearlcoat with a Black/Diesel Gray interior. Buy confidence knowing Jeep Dodge Ram Surprise has been exceeding customer expectations for many years and always provide customers with a great value!
            Sit amet consectetura dipisicing elit dui sed eiusmod ciltempor incididunt uet labore uset dolore magna aliqua minim veniam quisnostrud exercitation. Slamco em laborisa aliquip ex ea comdo consequat uis sed auted irure rehenderit voluptate velit esse cillum doloreu fugiat nulla sed pariatura ipsum dolor am consecteu adipis elit sed do eiusmod tempora incididunt. Lorem ipsum dolor sitamet, consectetur adipisicing elit sedo eius tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea comodo consequat aute irure reprehen deritin voluptate velit esse cillum dolore eu fugiat nula pariatur excepteur sint cupidatat no proident sunt in culpa qui officia deserunt mollit anim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation',
        ]);
        vehicles::Create([
            'dealer_id' => rand(1,3),
            'model_id' => rand(1,10),
            'price' => rand(100,400),
            'name' => 'FORD CONVERTIBLE',
            'year' => '2010',
            'fuel' => 'Petrol+CNG',
            'horsepowe' => rand(100,200),
            'condition' => 'Driver',
            'mileage' => '4567',
            'engine' => '1900 cm3',
            'drive' => '4x4',
            'status' => '1',
            'description' => 'This 2018 model car is Brilliant Black Crystal Pearlcoat with a Black/Diesel Gray interior. Buy confidence knowing Jeep Dodge Ram Surprise has been exceeding customer expectations for many years and always provide customers with a great value!
            Sit amet consectetura dipisicing elit dui sed eiusmod ciltempor incididunt uet labore uset dolore magna aliqua minim veniam quisnostrud exercitation. Slamco em laborisa aliquip ex ea comdo consequat uis sed auted irure rehenderit voluptate velit esse cillum doloreu fugiat nulla sed pariatura ipsum dolor am consecteu adipis elit sed do eiusmod tempora incididunt. Lorem ipsum dolor sitamet, consectetur adipisicing elit sedo eius tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea comodo consequat aute irure reprehen deritin voluptate velit esse cillum dolore eu fugiat nula pariatur excepteur sint cupidatat no proident sunt in culpa qui officia deserunt mollit anim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation',
        ]);
        vehicles::Create([
            'dealer_id' => rand(1,3),
            'model_id' => rand(1,10),
            'price' => rand(100,400),
            'name' => 'DODGE HELLCAT',
            'year' => '2010',
            'fuel' => 'Petrol+CNG',
            'horsepowe' => rand(100,200),
            'condition' => 'Driver',
            'mileage' => '4567',
            'engine' => '1900 cm3',
            'drive' => '4x4',
            'status' => '1',
            'description' => 'This 2018 model car is Brilliant Black Crystal Pearlcoat with a Black/Diesel Gray interior. Buy confidence knowing Jeep Dodge Ram Surprise has been exceeding customer expectations for many years and always provide customers with a great value!
            Sit amet consectetura dipisicing elit dui sed eiusmod ciltempor incididunt uet labore uset dolore magna aliqua minim veniam quisnostrud exercitation. Slamco em laborisa aliquip ex ea comdo consequat uis sed auted irure rehenderit voluptate velit esse cillum doloreu fugiat nulla sed pariatura ipsum dolor am consecteu adipis elit sed do eiusmod tempora incididunt. Lorem ipsum dolor sitamet, consectetur adipisicing elit sedo eius tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea comodo consequat aute irure reprehen deritin voluptate velit esse cillum dolore eu fugiat nula pariatur excepteur sint cupidatat no proident sunt in culpa qui officia deserunt mollit anim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation',
        ]);
        vehicles::Create([
            'dealer_id' => rand(1,3),
            'model_id' => rand(1,10),
            'price' => rand(100,400),
            'name' => 'NISSAN LEAF NISMO',
            'year' => '2010',
            'fuel' => 'Petrol+CNG',
            'horsepowe' => rand(100,200),
            'condition' => 'Driver',
            'mileage' => '4567',
            'engine' => '1900 cm3',
            'drive' => '4x4',
            'status' => '1',
            'description' => 'This 2018 model car is Brilliant Black Crystal Pearlcoat with a Black/Diesel Gray interior. Buy confidence knowing Jeep Dodge Ram Surprise has been exceeding customer expectations for many years and always provide customers with a great value!
            Sit amet consectetura dipisicing elit dui sed eiusmod ciltempor incididunt uet labore uset dolore magna aliqua minim veniam quisnostrud exercitation. Slamco em laborisa aliquip ex ea comdo consequat uis sed auted irure rehenderit voluptate velit esse cillum doloreu fugiat nulla sed pariatura ipsum dolor am consecteu adipis elit sed do eiusmod tempora incididunt. Lorem ipsum dolor sitamet, consectetur adipisicing elit sedo eius tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea comodo consequat aute irure reprehen deritin voluptate velit esse cillum dolore eu fugiat nula pariatur excepteur sint cupidatat no proident sunt in culpa qui officia deserunt mollit anim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation',
        ]);
        vehicles::Create([
            'dealer_id' => rand(1,3),
            'model_id' => rand(1,10),
            'price' => rand(100,400),
            'name' => 'RENAULT TROPHY',
            'year' => '2010',
            'fuel' => 'Petrol+CNG',
            'horsepowe' => rand(100,200),
            'condition' => 'Driver',
            'mileage' => '4567',
            'engine' => '1900 cm3',
            'drive' => '4x4',
            'status' => '1',
            'description' => 'This 2018 model car is Brilliant Black Crystal Pearlcoat with a Black/Diesel Gray interior. Buy confidence knowing Jeep Dodge Ram Surprise has been exceeding customer expectations for many years and always provide customers with a great value!
            Sit amet consectetura dipisicing elit dui sed eiusmod ciltempor incididunt uet labore uset dolore magna aliqua minim veniam quisnostrud exercitation. Slamco em laborisa aliquip ex ea comdo consequat uis sed auted irure rehenderit voluptate velit esse cillum doloreu fugiat nulla sed pariatura ipsum dolor am consecteu adipis elit sed do eiusmod tempora incididunt. Lorem ipsum dolor sitamet, consectetur adipisicing elit sedo eius tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea comodo consequat aute irure reprehen deritin voluptate velit esse cillum dolore eu fugiat nula pariatur excepteur sint cupidatat no proident sunt in culpa qui officia deserunt mollit anim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation',
        ]);
    }
}
