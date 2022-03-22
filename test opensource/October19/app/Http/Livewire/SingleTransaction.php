<?php

namespace App\Http\Livewire;

use App\Models\SubjectChoice;
use App\Models\Transaction;
use Livewire\Component;

class SingleTransaction extends Component
{
    public $user;
    public $table;

    public function render()
    {
        $this->getSingleTransactionTable();
        return view('livewire.single-transaction');
    }

    public function getSingleTransactionTable(){
        $trans = Transaction::where('student_id','=',$this->user)->get();
        $thead = [
            'head0'=>'ID',
            'head1'=>'Subject',
            'head2'=>'Subject Cost',
            'head3'=>'Amount Paid',
            'head4'=>'Amount Balance',
            'head5'=>'Year Of Exam'
        ];

        $trow = [];
        $count = 1;
        foreach ($trans as $payments ) {
            $trow['row'.$count.''] = '
                <tr>
                    <th>'.$payments->id.'</th> 
                    <td>'.getSubject($payments->subject_id)->subject_nm.'</td> 
                    <td>'.$payments->amount_due.'</td> 
                    <td>'.$payments->amount_payed.'</td> 
                    <td>'.$payments->balance_amt.'</td> 
                    <td>'.$payments->year_of_exam.'</td> 
                </tr>
            ';
            ++$count;
        }
        table($thead,$trow);
    }
}
