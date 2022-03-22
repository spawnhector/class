<?php

namespace App\Http\Livewire\Home;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email' => 'required',
        'password' => 'required',
    ];

    public function render()
    {
        return view('livewire.home.login');
    }

    public function login(){
        // $this->resetErrorBag();
        $info = $this->validate();
        $info['role'] = 'user';
        if(Auth::attempt($info)){
            $actual_link = $_SERVER['HTTP_REFERER'];
            $url_check = explode('/',$actual_link);

            if ($url_check[3] == 'car') {
                return redirect('car/'.$url_check[4]);
            }
            return redirect()->route('user.dashboard');

        }else{
            dd('something went wrong');
        }
    }
}
