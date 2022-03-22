<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Modal extends Component
{

    public $show = false;
    public function render()
    {
        return view('livewire.modal');
    }
}
