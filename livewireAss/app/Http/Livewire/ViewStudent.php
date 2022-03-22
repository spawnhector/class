<?php

namespace App\Http\Livewire;

use App\Models\student;
use Livewire\Component;

class ViewStudent extends Component
{
    public $error;
    public $success;
    public $user_id;

    public function render()
    {
        return view('livewire.view-student');
    }

    public function deleteStudent()
    {
        $student = student::find($this->user_id);
        $student->delete();
        return redirect()->route('admin.dashboard');
    }
    
   
}
