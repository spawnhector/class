<?php

namespace App\Http\Livewire;

use App\Models\Payment_history;
use Livewire\Component;

class SinglePayment extends Component
{
    public $user;
    public $table;

    public function render()
    {
        $this->getSinglePaymentTable();
        return view('livewire.single-payment');
    }

    public function getSinglePaymentTable(){
        $history = Payment_history::where('student_id','=',$this->user)->get();
        $thead = [
            'head0'=>'ID',
            'head1'=>'Amount',
            'head2'=>'Date Paid',
            'head3'=>'Description'
        ];

        $trow = [];
        $count = 1;
        foreach ($history as $payments ) {
            $trow['row'.$count.''] = '
                <tr>
                    <th>'.$payments->id.'</th> 
                    <td>'.$payments->payment_amt.'</td> 
                    <td>'.$payments->date_payed.'</td> 
                    <td>'.$payments->description.'</td> 
                </tr>
            ';
            ++$count;
        }
        table($thead,$trow);
    }
}
