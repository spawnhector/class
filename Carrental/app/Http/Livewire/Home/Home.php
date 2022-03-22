<?php

namespace App\Http\Livewire\Home;

use App\Models\models;
use App\Models\vehicles;
use Livewire\Component;

class Home extends Component
{
    public $models,$vehicles;

    public function render()
    {
        $this->models();
        $this->vehicles();
        return view('livewire.home.home');
    }

    public function models(){
        $this->models = models::get()->toArray();
    }

    public function vehicles(){
        $this->vehicles = vehicles::get()->toArray();
    }
}
