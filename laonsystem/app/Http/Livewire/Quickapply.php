<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\borrower;
use App\Models\branch;
use Carbon\Carbon;

class Quickapply extends Component
{
    use WithFileUploads;

    public $loan_amount;
    public $branch;
    public $employeer_name;
    public $employment_duration;
    public $full_nm;
    public $trn;
    public $number;
    public $email;
    public $identity;
    public $pay_slip;
    public $poa;
    public $job_letter;
    public $result;
    public $quickLoan;
    public $loanType;
    public $branches;

    public $btn_tag;

    protected $rules= [
        'loan_amount'=>'required',
        'branch'=>'required',
        'employeer_name'=>'required',
        'employment_duration'=>'required',
        'full_nm'=>'required',
        'trn'=>'required|min:',
        'number'=>'required',
        'email'=>'required',
        'identity'=>'required',
        'pay_slip'=>'required',
        'poa'=>'required',
        'job_letter'=>'required',
    ];

    public function render()
    {
        $this->setBranch();
        return view('livewire.quickapply');
    }

    public function quickApply(){ 
        $this->validate();
        borrower::create([
            'loan_amount'=> $this->loan_amount,
            'branch_id' => $this->branch,
            'loan_type' => $this->loanType,
            'employeer_name' => $this->employeer_name,
            'employment_duration' => $this->employment_duration,
            'full_nm' => $this->full_nm,
            'trn' => $this->trn,
            'number' => $this->number,
            'email' => $this->email,
            'identity' => $this->identity->store('identity'),
            'pay_slip' => $this->pay_slip->store('paySlip'),
            'poa' => $this->poa->store('POA'),
            'job_letter' => $this->job_letter->store('jobLetter'),
        ])
        ? $this->quickLoan = true
        : $this->result = 'Something Went Wrong';
    }

    public function loanType($type){
        $this->loanType = $type;
    }

    public function clearModal(){
        $this->loan_amount = "";
        $this->branch = "";
        $this->employeer_name = "";
        $this->employment_duration = "";
        $this->full_nm = "";
        $this->trn = "";
        $this->number = "";
        $this->email = "";
        $this->identity = "";
        $this->pay_slip = "";
        $this->poa = "";
        $this->job_letter = "";
        $this->result = "";
        $this->quickLoan = "";
        $this->loanType = "";
    }

    public function setBranch(){
        $this->branches = new branch;
    }


}
