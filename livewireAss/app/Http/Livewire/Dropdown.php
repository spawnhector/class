<?php

namespace App\Http\Livewire;

use App\Models\phone_number;
use Livewire\Component;
use Livewire\WithPagination;


class Dropdown extends Component
{
    use WithPagination;
    public $user;
    public $paginatee;
    public $result;
    public $status;
    public $name;
    public $number;
    public $numberId;
    public $numberCount;

    public function render()
    {   
        $thePag = '';
        $theNumber = '';
        $getPag = phone_number::where('student_id','=',$this->paginatee)->paginate(5);
        if (count($getPag) != 0) {
            foreach ($getPag as $number) {
                $this->name = $number->student->fisrt_nm;
                $this->number = $number->number;
                $this->numberId = $number->id;
                $theNumber .= "
                <!-- component -->
                <div class='container mb-2 flex mx-auto w-full items-center justify-center'>
                    <ul class='flex flex-col p-4'>
                        <li class='border-gray-400 flex flex-row'>
                            <div class='select-none flex flex-1 items-center p-4 transition duration-500 ease-in-out transform hover:-translate-y-2 rounded-2xl border-2 p-6 hover:shadow-2xl border-red-400'>
                                <div class='flex-1 pl-1 mr-16'>
                                    <div class='font-medium'>
                                        #".$number->number."
                                    </div>
                                </div>
                                <div class='w-1/4 text-wrap text-center flex text-white text-bold flex-col rounded-md bg-red-500 justify-center items-center mr-10 p-2 hover:bg-blue-500 cursor-pointer' >
                                    <a href='".route('admin.editnumber',[$number->id])."'>Edit</a>
                                </div>
                                <div class='w-1/4 text-wrap text-center flex text-white text-bold flex-col rounded-md bg-red-500 justify-center items-center mr-10 p-2 hover:bg-blue-500 cursor-pointer' wire:click='confirmDeleteNumber()'>
                                    Delete
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>";
            }
            $thePag = $getPag->links();
        }else{
            if ($this->paginatee != '') {
                // $checkPag = phone_number::where('student_id','=',$this->paginatee)->get();
                // if (count($checkPag) != 0) {
                //     // dd($getPag->previousPageUrl());
                //     $this->redirectPag($getPag);
                // }else{
                // }
                $theNumber = '<div class="container mb-2 flex mx-auto w-full items-center justify-center">No phone numbers added for '.getStudentById($this->paginatee)->fisrt_nm.'</div>';
            }
        }
        $this->result = $theNumber;
        return view('livewire.dropdown',[
            'paginate' => $thePag
        ]);
    }

    public function getNumber(){
        $this->paginatee = $this->user;
    }


    public function confirmDeleteNumber(){
        $this->status = '
        <section >
            <div>
            <!------ Component-->
            <div class="p-6 border-l-4 border-red-500 rounded-r-xl bg-red-50 mb-2">
                <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="w-5 h-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="ml-3">
                    <div class="text-sm text-red-600 flex">
                        Are your sure you want to delete #'.$this->number.' ?
                        <div class="w-1/4 text-wrap text-center flex text-white text-bold flex-col rounded-md bg-red-500 justify-center items-center m-1 p-2 hover:bg-blue-500 cursor-pointer">
                            <a wire:click="deleteNumberr()">Yes</a>
                        </div>
                        <div class="w-1/4 text-wrap text-center flex text-white text-bold flex-col rounded-md bg-red-500 justify-center items-center m-1 p-2 hover:bg-blue-500 cursor-pointer">
                            No
                        </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </section>';
    }

    public function deleteNumberr(){
        // dd($this->name);
        $theNumber = phone_number::find($this->numberId);
        $theNumber->delete();
        $this->status = '
            <section>
            <div>
                <!------ Component-->
                <div class="p-6 border-l-4 border-green-500 -6 rounded-r-xl bg-green-50 mb-2">
                <div class="flex">
                    <div class="flex-shrink-0">
                    <svg class="w-5 h-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    </div>
                    <div class="ml-3">
                    <div class="text-sm text-green-600">
                    Number #'.$this->number.' for '.$this->name.' had been deleted.
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </section>
        ';
    }

}
