<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\borrower;
use Illuminate\Http\Request;

class searchController extends Controller
{
    public function search($name)
    {
        $q = [];

        if ($name) {

            $q = [
                // $book = Book::with(['category','book_type'])->where('title',"like","%".$name."%")->get(),
                $member = borrower::where('full_nm', "like", "%".$name."%")->get()
            ];

            $status = 200;
            $message = "😎";
        }else{
            $q = [
                // $book = Book::with(['category','book_type'])->get(),
                $member = borrower::all()
            ];
            $status = 200;
            $message = "😎";
        }

        if (is_null($q)) {
            $status = 404;
            $message = "Something Went Wrong";
        }

        return response()->json([
            'query' => $q,
            'status' => $status,
            'message' => $message ? $message : false
        ]);

    }
}
