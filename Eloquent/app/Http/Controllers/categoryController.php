<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function def_category(){
        categories::create([
            'category_nm' => 'Poultry',
            'category_desc' => 'Mixture of Duck, Turkey and Chicken'
        ]);
        categories::create([
            'category_nm' => 'sea Food',
            'category_desc' => 'Mixture of fish, saltfish'
        ]);
        categories::create([
            'category_nm' => 'Dry Goods',
            'category_desc' => 'Mixture of Duck, Turkey and Chicken'
        ]);

        echo 'Categories Added';
    }
}
