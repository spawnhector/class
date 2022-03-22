<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Sidebar extends Dashboard
{

    
    public function render()
    {
        return view('livewire.admin.sidebar');
    }
    
    public function screen($screen,$id=null,$type=null){
        $this->emit('refreshScreen',$screen);
    }
}
