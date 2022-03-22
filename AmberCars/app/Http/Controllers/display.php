<?php

namespace App\Http\Controllers;

use App\Models\brand;
use App\Models\vehicle_model;
use App\Models\vehicle_type;
use Illuminate\Http\Request;

class display extends Controller
{
    public function index(){
        $brandss = brand::all();
        
        $show = ' ';
        foreach ($brandss as $key ) {
            $vechile_type = vehicle_type::where('brand_id','=',$key->id)->get();
            foreach ($vechile_type as $ss ) {
                $vechile_model = vehicle_model::where('vehicle_type_id','=',$ss->id)->get();
                foreach ($vechile_model as $model) {
                    $show .= 
                    '
                    <tr>
                    <td>'.$key->brand_nm.'</td>
                    <td>'.$ss->vhcl_type_nm.'</td>
                    <td>'.$model->vhcl_model_nm.'</td>
                    <td><a href="/delete/'.$key->id.'">Delete</a></td>
                    </tr>
                    ';
                }
            }
        }
        return view('display',[
            'show'=> $show
        ]);
    }

    public function delete($id){
        $dele = brand::destroy($id);
        $brandss = brand::all();
        
        $show = ' ';
        foreach ($brandss as $key ) {
            $vechile_type = vehicle_type::where('brand_id','=',$key->id)->get();
            foreach ($vechile_type as $ss ) {
                $vechile_model = vehicle_model::where('vehicle_type_id','=',$ss->id)->get();
                foreach ($vechile_model as $model) {
                    $show .= 
                    '
                    <tr>
                    <td>'.$key->brand_nm.'</td>
                    <td>'.$ss->vhcl_type_nm.'</td>
                    <td>'.$model->vhcl_model_nm.'</td>
                    <td><button>Delete</button></td>
                    </tr>
                    ';
                }
            }
        }
        return view('display',[
            'show'=> $show
        ]);
    }
}
