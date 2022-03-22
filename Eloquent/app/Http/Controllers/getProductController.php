<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\products;
use Illuminate\Http\Request;

class getProductController extends Controller
{
    public function index(){
        $categories = categories::all();
        foreach ($categories as $catinfo ) {
            $products = products::where('category_id',$catinfo->id)->get();
            echo "<h3>Category: $catinfo->category_nm</h3>";
            foreach ($products as $prod ) {
                echo "<p style='padding-left:10px'>Product Id: $prod->id</p>";
                echo "<p style='padding-left:10px'>Product Name: $prod->products_nm</p>";
                echo "<p style='padding-left:10px'>Product Price: $prod->price_amt</p><br>";
            }
        }
        
        echo "<form action='updateprod' method='get'><input type='text' name='productId' placeholder='Product id to update' id=''> ... <input type='text' name='ProductName' placeholder='Product Name' id=''><input type='text' name='updateprice' placeholder='Product Price' id=''><button type='submit'>Update</button></form>";
    }
}
