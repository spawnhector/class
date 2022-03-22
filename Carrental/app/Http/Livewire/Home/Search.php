<?php

namespace App\Http\Livewire\Home;

use App\Models\models;
use Livewire\Component;

class Search extends Component
{
    public $models,$vehicles;

    public function render()
    {
        $this->models();
        return view('livewire.home.search');
    }

    public function models(){
        $this->models = models::get()->toArray();
    }
}
