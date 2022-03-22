<?php

namespace App\Http\Livewire;

use App\Models\teacher;
use Livewire\Component;

class Viewteacher extends Component
{
    public $table;
    public function render()
    {
        
        $teacher = teacher::get();
        $thead = [
            'head0'=>'ID',
            'head1'=>'Name',
            'head2'=>'Subject',
            'head3'=>'Student Count',
            'head4'=>'Add',
            'head5'=>'Delete',
            'head6'=>'Status'
        ];

        $trow = [];
        $count = 0;
        foreach ($teacher as $teac ) {

            if ($teac->status == '1') {
                if ($teac->student) {
                    $countStudent = count($teac->student);
                } else {
                    $countStudent = '0';
                }
            } else {
                $countStudent = 'Approve To View Student Count';
            }

            if ($teac->status == '1') {
                $add_Stud_Bth = '
                add';
            } else {
                $add_Stud_Bth = 'Approve To Add Students';
            }

            if ($teac->status == '1') {
                $delete_Stud_Btn = '
                <a href="" class="mt-2 border-2 border-blue-500 rounded-full font-bold text-blue-500 px-2 py-1 transition duration-300 ease-in-out hover:bg-blue-500 hover:text-white mr-6">
                    Delete
                </a>
                ';
            } else {
                $delete_Stud_Btn = 'Approve To Delete Students';
            }
            // dd($teac->subject[0]);
            
            $trow['row'.$count.''] = '
                <tr>
                    <th>'.$teac->id.'</th> 
                    <td>'.$teac->teacher_nm.'</td> 
                    <td>'.$teac->subject[0]->subject_nm.'</td> 
                    <td>'.$countStudent.'</td> 
                    <td>'.$add_Stud_Bth.'</td> 
                    <td>'.$delete_Stud_Btn.'</td> 
                    <td>'.$this->checkTeacherStatus($teac->status,$teac->id).'</td> 
                </tr>
            ';
            ++$count;
        }
        return view('livewire.viewteacher',[
            'thead'=>$thead,
            'trow'=>$trow
        ]);
    }

    public function checkTeacherStatus($stat,$idd){
        if ($stat == '0') {
            return '
            <label for="unchecked1" class="inline-flex items-center cursor-pointer" wire:click="activateTeacher('.$idd.')">
                <span class="relative">
                <span class="block w-10 h-6 bg-gray-400 rounded-full shadow-inner"></span>
                <span class="absolute block w-4 h-4 mt-1 ml-1 bg-white rounded-full shadow inset-y-0 left-0 focus-within:shadow-outline transition-transform duration-300 ease-in-out">
                    <input name="unchecked1" id="unchecked" type="checkbox" class="absolute opacity-0 w-0 h-0" />
                </span>
                </span>
            </label>';
        } else {
            return '
            <label for="checked" class="inline-flex items-center cursor-pointer">
                <span class="relative">
                <span class="block w-10 h-6 bg-gray-400 rounded-full shadow-inner"></span>
                <span class="absolute block w-4 h-4 mt-1 ml-1 rounded-full shadow inset-y-0 left-0 focus-within:shadow-outline transition-transform duration-300 ease-in-out bg-purple-600 transform translate-x-full">
                    <input id="checked" type="checkbox" class="absolute opacity-0 w-0 h-0" />
                </span>
                </span>
            </label>';
        } 
    }

    public function activateTeacher($di){
        $teach = teacher::find($di);
        $teach->status = '1';
        $teach->save();
    }
    
}
