<?php

namespace App\Http\Livewire\User;

use App\Models\dealer;
use App\Models\User;
use App\Models\vehicles;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{

    public $updateAddress;
    public $updatedAddress;
    public $updateTele;
    public $updatedTele;
    public $userAddress;
    public $userTele;

    protected $listeners = [
        'updateUser',
        'updated'
    ];

    protected $rules = [
        'userAddress' => 'required',
        'userTele' => 'required'
    ];

    public function render()
    {
        return view('livewire.user.dashboard',[
            'dealer'=>$this->dealer(),
            'user'=>Auth::user()
        ]);
    }

    public function dealer(){
        return dealer::get();
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }

    public function updateUser($e){
        if ($e == 'address') $this->updateAddress = true;
        if ($e == 'telephone') $this->updateTele = true;
    }

    public function updateUserData($e){
        
        if ($e == 'address') $data = $this->validateOnly('userAddress');
        if ($e == 'telephone') $data = $this->validateOnly('userTele');

        $user = User::find(Auth::user()->id);
        if ($e == 'address') $user->address = $data['userAddress'];
        if ($e == 'telephone') $user->phone = $data['userTele'];

        if ($user->save()) {
            $this->dispatchBrowserEvent('user-updated', ['info' => 'User '.$e.' updated']);
            if ($e == 'address') {
                $this->updateAddress = false;
                $this->updatedAddress=$data['userAddress'];
            }
            if ($e == 'telephone') {
                $this->updateTele = false;
                $this->updatedTele=$data['userTele'];
            }
        } 
        else{ dd('something went wrong'); }

    }
}
