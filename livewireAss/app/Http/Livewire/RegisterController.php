<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RegisterController extends Component
{
    public function render()
    {
        return view('livewire.register-controller');
    }

    public function register(){
        return view('register');
    }
}
