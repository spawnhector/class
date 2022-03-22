<?php

namespace App\Http\Livewire\Home;

use App\Models\vehicles;
use Livewire\Component;

class VehicleList extends Component
{
    public 
    $slug,$vehicle,$page,$sort;

    protected $listeners = ['vehicle'];
    public function render()
    {
        if (empty($this->slug)) {
            if (empty($this->page)) {
                $car = $this->vehicle(9);
                $this->page = count($car);
            } else {
                $car = $this->vehicle($this->page);
            }
        } else {
            if (empty($this->page)) {
                $car = $this->vehicle(9,$this->slug);
                $this->page = count($car);
            } else {
                $car = $this->vehicle($this->page,$this->slug);
            }
        }
        
        
        return view('livewire.home.vehicle-list',['cars'=>$car]);
    }

    public function vehicle($sort,$model=null){
        $this->page = $sort;
        if (empty($model)) {
            return vehicles::limit($sort)->get();
        } else {
            return vehicles::where('model_id','=',$model)->limit($sort)->get();
        }
        
    }
}
