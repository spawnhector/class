<?php

namespace App\Http\Livewire\Index;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    public $result;
    public $btn_tag;

    protected $rules = [
        'email'=>'required',
        'password'=>'required',
    ];
    
    public function render()
    {
        return view('livewire.index.login');
    }

    public function login(){
        $cred = $this->validate();
        Auth::attempt($cred)
            ? $this->redirectTo('dashboard')
            : $this->result = 'Something went wrong';
    }

    public function redirectTo($route){
        return redirect()->route($route);
    }

    public function clearModal(){
        $this->email = '';
        $this->password = '';
        $this->result = '';
    }
}
