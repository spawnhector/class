<?php

namespace App\Http\Livewire;

use App\Models\student;
use Livewire\Component;

class Addstudent extends Component
{
    public $student_first_nm = '';
    public $student_last_nm = '';
    public $student_dob = '';
    public $student_email = '';
    public $error = '';
    public $success = '';

    public function render()
    {
        return view('livewire.addstudent');
    }

    function addStudent(){
        if (!empty($this->student_first_nm)) {
            $this->error = '';
            if (!empty($this->student_last_nm)) {
                $this->error = '';
                if (!empty($this->student_dob)) {
                    $this->error = '';
                    if (!empty($this->student_email)) {
                        $this->error = '';
                        student::create([
                            'fisrt_nm'=> $this->student_first_nm,
                            'last_nm'=> $this->student_last_nm,
                            'dob'=> $this->student_dob,
                            'email'=> $this->student_email
                        ]);
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
                                        Student added
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </section>
                        ';
                    }else{
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
                                        Student email is empty 
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </section>';
                    }
                }else{
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
                                    Student date of birth is empty 
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </section>';
                }
            }else{
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
                                Student last name is empty 
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </section>';
            }
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
                            Student first name is empty 
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </section>';
        }
    }

    public function getError(){
        return $this->error;
    }

    public function getSuccess(){
        return $this->success;
    }

  


}
