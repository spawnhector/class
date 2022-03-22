<?php

namespace App\Http\Livewire\Home;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public 
    $reg_name,
    $reg_email,
    $reg_password,
    $reg_password_confirmation;

    protected $rules = [
        'reg_name' => 'required',
        'reg_email' => 'required',
        'reg_password' => 'required',
        'reg_password_confirmation' => 'required',
    ];

    public function render()
    {
        return view('livewire.home.register');
    }

    public function register(){
        $this->validate();
        
        $check = count(User::get());
        $check++;
        $htmi = str_pad($check, 6, "0", STR_PAD_LEFT); 
        User::Create([
            'name' => $this->reg_name,
            'email' => $this->reg_email,
            'password' => Hash::make($this->reg_password),
            'htmi' => 'HT'.$htmi,
            'status' => 1,
            'role' => 'user'
        ])
        ? Auth::logout()
        : dd('something went wrong');
    }
    
}
