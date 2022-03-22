<?php

namespace App\Http\Livewire\Home;

use App\Models\rented;
use App\Models\vehicles;
use Livewire\Component;

class Cars extends Component
{
    public 
    $slug,
    $vehicle;
    
    protected $listeners = [
        'bookCar'
    ];

    public function render()
    {   $this->vehicle();
        return view('livewire.home.cars');
    }

    public function vehicle(){
        $this->vehicle = vehicles::where('id','=',$this->slug)->get()->first();
    }

    public function bookCar($info){
        // dd($info);
        if (rented::Create([
            'user_id' => auth()->user()->id,
            'vehicle_id' => $this->slug,
            'pickup_location'=>$info[4],
            'dropoff_location'=>$info[5],
            'child_seat' => $info[6], 
            'gps_navigation' => $info[7], 
            'additional_driver' => $info[8], 
            'wifi_access' => $info[9], 
            'winter_package' => $info[10], 
            'bski_rack' => $info[11], 
            'full_insurance' => $info[12], 
            'pickup_date'=>$info[13],
            'dropoff_date'=>$info[14],
            'rented_days'=>$info[2]
        ])){
            $this->dispatchBrowserEvent('car-booked', ['newName' => 'car booked']);
        }else{
            dd('something went wrong when storing data.');
        };
    }
}
