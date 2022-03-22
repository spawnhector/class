<?php

namespace App\Http\Livewire\Index;

use Livewire\Component;

class Loaninfo extends Component
{
    public $inmail_result;
    public $btn_tag;
    public $result_email;
    public $loan_amount;
    public $loan_interest="7.45%";
    public $loan_downpayment;
    public $loan_term_years;
    public $loan_term_month;
    public $loan_term_duration;
    public $selecType;
    public $loanType;

    public function render()
    {
        return view('livewire.index.loaninfo');
    }

    public function calculateLoan(){
        dd('cal');
    }

    public function seType($type){
        $this->selecType = $type;
    }

    
}
