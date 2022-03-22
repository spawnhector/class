<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paymentController extends Controller
{
    
    public function verifyCard(Request $request){

        $isValid = $this->validateCard($request->card_nm);
        if ($isValid) {
            return response()->json([
                'success'=> 'Card number valid'
            ],200);
        }

        return response()->json([
            'error'=> 'Card number invalid'
        ],202);
    }

    function validateCard(string $number): bool
    {
        $sum = 0;
        $flag = 0;

        for ($i = strlen($number) - 1; $i >= 0; $i--) {
            $add = $flag++ & 1 ? $number[$i] * 2 : $number[$i];
            $sum += $add > 9 ? $add - 9 : $add;
        }

        return $sum % 10 === 0;
    }
}
