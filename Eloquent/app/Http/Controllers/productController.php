<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function def_product(){
        products::create([
            'products_nm' => 'Turkey Nect',
            'price_amt' => 185.00,
            'category_id' => 1
        ]);
        products::create([
            'products_nm' => 'Salt Fish',
            'price_amt' => 200.00,
            'category_id' => 2
        ]);
        products::create([
            'products_nm' => 'Tuff Crackers',
            'price_amt' => 85.00,
            'category_id' => 3
        ]);

        echo 'Products Added';
    }
}
