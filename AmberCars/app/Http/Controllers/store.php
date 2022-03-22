<?php

namespace App\Http\Controllers;

use App\Models\brand;
use App\Models\vehicle_model;
use App\Models\vehicle_type;
use Illuminate\Http\Request;

class store extends Controller
{
    public function store(){
        $brands = brand::all();
        $vchl_type = vehicle_type::all();
        return view('store',[
            'brands'=>$brands,
            'vchl_type'=>$vchl_type
        ]);
    }

    public function storebrand(Request $request){
        // dd($request);
        brand::create([
            'brand_nm' => $request->brandss_nm,
            'brand_desc' => $request->brandss_desc,
        ]);
        $brands = brand::all();
        $vchl_type = vehicle_type::all();
        return view('store',[
            'brands'=>$brands,
            'vchl_type'=>$vchl_type
        ]);
    }

    public function storevhcl_type(Request $request){
        // dd($request);
        vehicle_type::create([
            'vhcl_type_nm' => $request->vhcl_type_nm,
            'brand_id' => $request->brandf_id
        ]);
        $brands = brand::all();
        $vchl_type = vehicle_type::all();
        return view('store',[
            'brands'=>$brands,
            'vchl_type'=>$vchl_type
        ]);
    }

    public function storemodel(Request $request){
        // dd($request);
        vehicle_model::create([
            'vhcl_model_nm' => $request->vhcl_model_nm,
            'year' => $request->year,
            'color' => $request->color,
            'cost' => $request->cost,
            'condition' => $request->condition,
            'mileage' => $request->milage,
            'capacity' => $request->capacity,
            'driver_side' => $request->driver_side,
            'trans_type' => $request->trans_type,
            'vehicle_type_id' => $request->vhcl_type_id
        ]);
        $brands = brand::all();
        $vchl_type = vehicle_type::all();
        return view('store',[
            'brands'=>$brands,
            'vchl_type'=>$vchl_type
        ]);
    }

    
}
