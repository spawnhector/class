<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class borrowerController extends Controller
{
    public function show(){
        $borrower = DB::table('borrowers')->select('*')->get();
        return Response()->json($borrower);
    }

    public function search($query){
        $result = [];
        $borrower = DB::table('borrowers')->where('full_nm','like','%'.$query.'%')->get();
        if (count($borrower) != 0) {
            foreach ($borrower as $item ) {
                array_push($result,$item);
            }
        } else {
            $next = DB::table('borrowers')->where('loan_type','like','%'.$query.'%')->get();
            if (count($next) != 0) {
                foreach ($next as $item ) {
                    array_push($result,$item);
                }
            }
        }
        
        return Response()->json($result);
    }

    public function searchInterview($query){
        $result = [];
        $borrower = DB::table('interviews')->where('borrower_id','=',$query)->get();
        if (count($borrower) != 0) {
            foreach ($borrower as $item ) {
                array_push($result,$item);
            }
        } else {
            $next = DB::table('borrowers')->where('loan_type','like','%'.$query.'%')->get();
            if (count($next) != 0) {
                foreach ($next as $item ) {
                    array_push($result,$item);
                }
            }
        }
        
        return Response()->json($result);
    }
}
