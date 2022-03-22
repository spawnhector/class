<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $name,$email,$password;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required',
    ];

    // protected $listeners = ['userCreated'];

    public function render()
    {
        return view('livewire.auth.register');
    }

    public function register(){
        $validate = $this->validate();
        $validate['password'] = Hash::make($validate['password']);
        $validate['role'] = '1';
        if(User::create($validate)){
            return redirect()->route('login')->with('accCreated','Account Created. Please login');
            // $this->emit('userCreated');
        }else{
            $this->addError('error', 'Something went wrong');
        }
        
        // dd($validate);
    }

    public function userCreated()
    {
        // 
    }
}
