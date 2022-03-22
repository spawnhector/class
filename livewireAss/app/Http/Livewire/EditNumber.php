<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EditNumber extends Component
{
    public $error;
    public $success;
    public $person;
    public $edit_number;

    public function render()
    {
        return view('livewire.edit-number',[
            'phone_number'=>$this->person->number
        ]);
    }

    public function editPhoneNumber(){
        if (!empty($this->edit_number)) {
            $this->person->number = $this->edit_number;
            $this->person->save();
            $this->success = '
                <section>
                <div>
                    <!------ Component-->
                    <div class="p-6 border-l-4 border-green-500 -6 rounded-r-xl bg-green-50">
                    <div class="flex">
                        <div class="flex-shrink-0">
                        <svg class="w-5 h-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        </div>
                        <div class="ml-3">
                        <div class="text-sm text-green-600">
                            Phone number for '.getStudentById($this->person->student_id)->fisrt_nm.' updated.
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </section>
            ';
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
                            Nothing to edit.
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </section>';
        }
    }
}
