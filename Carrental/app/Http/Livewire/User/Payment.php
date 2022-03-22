<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class Payment extends Component
{
    public 
    $cardNumber,
    $cardHolder,
    $cardDate,
    $cardCvv;

    protected $rules = [
        'cardNumber' => 'required',
        'cardHolder' => 'required',
        'cardDate' => 'required',
        'cardCvv' => 'required',
    ];
    public function render()
    {
        return view('livewire.user.payment');
    }

    public function pay(){
        $this->validate();
    }
}
