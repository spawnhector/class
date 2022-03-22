<?php

namespace App\Http\Livewire;

use App\Models\teacher;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Addteacher extends Component
{

    public $result;
    public $status;
    public $submitButton = "Add Teacher";
    public $teacher_nm;
    public $subject_id;
    public $success_style;
    public $password;


    protected $rules = [
        'teacher_nm' => 'required|string|min:6',
        'subject_id' => 'required',
        'password' => 'required|min:6'
    ];

    // protected $message = [
    //     'teacher_nm.required' => 'The Teacher Name Cannot Be Empty',
    //     'subjet_id.required' => 'Teacher Subject Cannot Be Empty',
    // ];
    
    public function updated($validate){

        $this->validateOnly($validate);
    }

    public function addTeacher(){

        $validate = $this->validate();
        $validate['password'] = Hash::make($validate['password']);
        teacher::create($validate);
        $this->result = '
        <section>
          <div class="relative items-center w-full px-5 py-12 mx-auto  md:px-12 lg:px-24 max-w-7xl">
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
                    <p> Teacher Added. </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      ';
    }
    
    public function render()
    {
        return view('livewire.addteacher');
    }

    
}
