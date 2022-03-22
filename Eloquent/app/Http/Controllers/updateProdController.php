<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class updateProdController extends Controller
{
    public function update(Request $request){
        $oProduct = products::find($request->productId);
        echo "Initial Product info:<br/>";
        echo "<p style='padding-left:15px'>Product: $oProduct->products_nm</p>";
        echo "<p style='padding-left:15px'>Cost Price: $oProduct->price_amt</p><br/>";

        $oProduct->products_nm = $request->ProductName;
        $oProduct->price_amt = $request->updateprice;
        $oProduct->save();

        echo "Product Info After Update";
        echo "<p style='padding-left:15px'>Product: $oProduct->products_nm</p>";
        echo "<p style='padding-left:15px'>Cost Price: $oProduct->price_amt</p><br/><a href='{{ route('login') }}' class='text-sm text-gray-700 dark:text-gray-500 underline'>Log in</a>";
    }
}
