<?php

namespace App\Http\Livewire;

use App\Models\Payment_history;
use App\Models\Student;
use App\Models\SubjectChoice;
use Livewire\Component;

class ViewStudent extends Component
{
    public $user;
    public $studenTable;
    public $subjectChoice;
    public $paymentTable;
    public $paymentHistoryTable;
    public $transactionTable;


    public function render()
    {   
        $student = Student::where('id','=',$this->user)->first();
        $thead = [
            'head0'=>'ID',
            'head1'=>'First Name',
            'head2'=>'Last Name',
            'head3'=>'Date Of Birth',
            'head4'=>'Class',
            'head5'=>'Phone',
            'head6'=>'Email',
            'head7'=>'Gender'
        ];

        $trow = [];
        $trow['row'] = '
            <tr>
                <th>'.$student->id.'</th> 
                <td>'.$student->first_nm.'</td> 
                <td>'.$student->last_nm.'</td> 
                <td>'.$student->dob.'</td> 
                <td>'.$student->class.'</td> 
                <td>'.$student->phone.'</td> 
                <td>'.$student->email.'</td> 
                <td>'.$student->gender.'</td> 
            </tr>
        ';
        $this->studenTable = table($thead,$trow,'Info For '.$student->first_nm.'');

        // SubjectChoice
        $subject = SubjectChoice::where('student_id','=',$this->user)->get();
        $thead = [
            'head0'=>'ID',
            'head1'=>'Subject',
            'head2'=>'Status',
            'head3'=>'Year Of Exam'
        ];

        $trow = [];
        $count = 0;
        foreach ($subject as $sub ) {
            $trow['row'.$count.''] = '
                <tr>
                    <th>'.$sub->id.'</th> 
                    <td>'.$sub->subject->subject_nm.'</td> 
                    <td>'.setStatus($sub->status).'</td> 
                    <td>'.$sub->year_of_exam.'</td> 
                </tr>
            ';
            ++$count;
        }
        $this->subjectChoice = table($thead,$trow,'SubjectChoice For '.$student->first_nm.'');

        // Payment
        $thead = [
            'head0'=>'ID',
            'head1'=>'Subject',
            'head2'=>'Amount Paid',
            'head3'=>'Balance Amount',
            'head4'=>'Date Paid'
        ];

        $trow = [];
        $trow['row'.$count.''] = '
            <tr>
            <th>'.$student->payment->first()->id.'</th> 
            <th>'.getSubject($student->payment->first()->subject_id)->subject_nm.'</th> 
            <td>'.$student->payment->first()->amount_payed.'</td> 
            <td>'.$student->payment->first()->balance_amt.'</td> 
            <td>'.$student->payment->first()->date_payed.'</td> 
            </tr>
        ';
        $this->payment = table($thead,$trow,'Payment For '.$student->first_nm.'');

        // Payment History
        
        $payment_history = getPaymentHistory($this->user);

        $thead = [
            'head0'=>'ID',
            'head1'=>'Payment Amount',
            'head2'=>'Date Paid',
            'head3'=>'Description'
        ];

        $trow = [];
        $count = 0;
        foreach ($payment_history as $payHistory ) {
            // dd($payHistory);
            $trow['row'.$count.''] = '
                <tr>
                    <th>'.$payHistory->id.'</th> 
                    <td>'.$payHistory->payment_amt.'</td> 
                    <td>'.$payHistory->date_payed.'</td> 
                    <td>'.$payHistory->description.'</td> 
                </tr>
            ';
            ++$count;
        }
        $this->paymentHistoryTable = table($thead,$trow,'Payment History For '.$student->first_nm.'');

        // Transaction
        $trans = getTransactionHistory($this->user);
        $thead = [
            'head0'=>'ID',
            'head1'=>'Subject',
            'head2'=>'Amount Due',
            'head3'=>'Amount Paid',
            'head4'=>'Balance Amount',
            'head5'=>'Year Of Exam',
        ];

        $trow = [];
        $count = 0;
        foreach ($trans as $payTrans ) {
            // dd($payTrans->subject->first()->subject_nm);
            $trow['row'.$count.''] = '
                <tr>
                    <th>'.$payTrans->id.'</th> 
                    <td>'.getSubject($payTrans->subject_id)->subject_nm.'</td> 
                    <td>'.$payTrans->amount_due.'</td> 
                    <td>'.$payTrans->amount_payed.'</td> 
                    <td>'.$payTrans->balance_amt.'</td> 
                    <td>'.$payTrans->year_of_exam.'</td> 
                </tr>
            ';
            ++$count;
        }
        $this->transactionTable = table($thead,$trow,'Transaction For '.$student->first_nm.'');
        return view('livewire.view-student');
    }
}
