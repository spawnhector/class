<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminDashboard extends Component
{
    public function render()
    {
        return view('livewire.admin-dashboard');
    }

    public function redirectTo($route){
        dd($route);
        redirectAll($route);
    }
}