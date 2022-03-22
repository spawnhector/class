<?php

namespace App\Http\Livewire\Admin;

use App\Models\branch;
use Livewire\Component;

class Addbranch extends Component
{
    public $branch_nm;
    public $result;
    public $btn_tag;

    protected $rules = [
        'branch_nm'=>'required'
    ];

    public function render()
    {
        return view('livewire.admin.addbranch');
    }

    public function addBranch(){
        $cred = $this->validate();
        branch::create($cred)
            ? $this->result = "Branch Added"
            : $this->result = "Something Went Wrong";
        $this->emit('refreshBranch');
        $this->branch_nm = '';
        $this->result = '';
    }
}
