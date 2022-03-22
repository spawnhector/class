<?php

namespace App\Http\Livewire;

use App\Models\SubjectChoice;
use Livewire\Component;

class Documents extends Component
{
    public $documentsTable;
    public function render()
    {
        $subjectChoice = SubjectChoice::get();
        $thead = [
            'head0'=>'ID',
            'head1'=>'Student',
            'head2'=>'Subject',
            'head3'=>'File',
            'head4'=>'Action'
        ];

        $trow = [];
        $count = 0;
        foreach ($subjectChoice as $sub ) {
            if(hasFile($sub->student_id,$sub->subject_id)){
                $file = 'File Attached';
            }else{
                $file = 'Please Attach File';
            }
            $trow['row'.$count.''] = '
                <tr>
                    <th>'.$sub->id.'</th> 
                    <td>'.$sub->student->first_nm.' '.$sub->student->last_nm.'</td> 
                    <td>'.$sub->subject->subject_nm.'</td> 
                    <td>'.$file.'</td> 
                    <td>'.$this->fileAction(hasFile($sub->student_id,$sub->subject_id),$sub->student->id,$sub->subject->id).'</td> 
                </tr>
            ';
            ++$count;
        }
        $this->subjectChoice = table($thead,$trow,"Student's Birth Certificate");
        return view('livewire.documents');
    }

    public function attachFile(){
        dd('attach');
    }

    public function fileAction($action,$student,$subject){
        if ($action) {
            return 'File Uploaded';
        } else {
            return '<button><a href='.route('uploadfile',[$student,$subject]).'>Attach</a></button>';
        }
        
    }
}
