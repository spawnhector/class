<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email,$password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|',
    ];

    public function render()
    {
        return view('livewire.auth.login');
    }

    public function login(){
        $validatedData = $this->validate();
        if (Auth::attempt($validatedData)) {
            $this->resetErrorBag('invalid');
            $user = Auth::user();
            if ($user->role == 1) {
                return redirect()->route('user.home');
            }
            if ($user->role == 2) {
                return redirect()->route('admin.home');
            }
            if ($user->role == 3) {
                return redirect()->route('super.home');
            }
            // dd($user->role);
        } else {
            $this->addError('invalid', 'Invalid user details.');
        }
        
        
    }
}
