<?php

namespace App\Http\Livewire;

use App\Models\student;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AuthController extends Component
{

    public $result = "";
    public $show = "hide";
    public $login_status = 1;
    public $error = '';
    public $email = "";
    public $password = "";
    
    public function render()
    {
        return view('livewire.auth-controller');
    }

    public function login(){
        return view('login');
    }

    public function checkDetails(){
        if ($this->login_status == 1) {
            $student = User::where('email','=', $this->email)->first();
            if ($student) {
                $this->login_status = 2;
                $this->error = '';
                $this->result =  
                '
                    <div class="space-y-1">
                    <label for="password" class="block text-sm font-medium text-neutral-600"> Password </label>
                    <div class="mt-1">
                        <input wire:model="password" id="password" name="password" type="password" autocomplete="current-password" required="" placeholder="Your Password" class="{{'.input_button.'}}">
                    </div>
                    </div>
                ';
            } else {
                $this->email = "";
                $this->error = '
                <section >
                    <div>
                    <!------ Component-->
                    <div class="p-6 border-l-4 border-red-500 rounded-r-xl bg-red-50">
                        <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="w-5 h-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="ml-3">
                            <div class="text-sm text-red-600">
                                Email not registered
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </section>';
            }
        } else {

            $credentials = [
                'email' => $this->email,
                'password' => $this->password
            ];

            if (Auth::attempt($credentials)) {
                return redirect()->route('admin.dashboard');
            } else {
                $this->error = '
                <section >
                    <div>
                    <!------ Component-->
                    <div class="p-6 border-l-4 border-red-500 rounded-r-xl bg-red-50">
                        <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="w-5 h-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="ml-3">
                            <div class="text-sm text-red-600">
                                Incorrect details
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </section>';
            }
            
        }
        
        
        
    }
}
