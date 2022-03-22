<?php

use App\Http\Controllers\StudentController;
use App\Models\student;

const submit_button = 'flex
items-center
justify-center
w-full
px-10
py-2
text-base
font-medium
text-center text-white
transition
duration-500
ease-in-out
transform
bg-blue-400
rounded-xl
hover:bg-blue-500
focus:outline-none
focus:ring-2
focus:ring-offset-2
focus:ring-blue-500';

const submit_button_style = 'position: absolute;right: 151px;top: 87px;width: 177px;';

const google_submit = "
w-full
items-center
block
px-10
py-3.5
text-base
font-medium
text-center text-blue-400
transition
duration-500
ease-in-out
transform
border-2 border-white
shadow-md
rounded-xl
focus:outline-none
focus:ring-2
focus:ring-offset-2
focus:ring-gray-500";

const input_button = "block
w-full
px-5
py-3
text-base text-neutral-600
placeholder-gray-300
transition
duration-500
ease-in-out
transform
border border-transparent
rounded-lg
bg-gray-50
focus:outline-none
focus:border-transparent
focus:ring-2
focus:ring-white
focus:ring-offset-2
focus:ring-offset-gray-300";


const google_svg = '
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-6 h-6" viewBox="0 0 48 48">
    <defs>
        <path id="a" d="M44.5 20H24v8.5h11.8C34.7 33.9 30.1 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.6 4.1 29.6 2 24 2 11.8 2 2 11.8 2 24s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z"></path>
    </defs>
    <clipPath id="b">
        <use xlink:href="#a" overflow="visible"></use>
    </clipPath>
    <path clip-path="url(#b)" fill="#FBBC05" d="M0 37V11l17 13z"></path>
    <path clip-path="url(#b)" fill="#EA4335" d="M0 11l17 13 7-6.1L48 14V0H0z"></path>
    <path clip-path="url(#b)" fill="#34A853" d="M0 37l30-23 7.9 1L48 0v48H0z"></path>
    <path clip-path="url(#b)" fill="#4285F4" d="M48 48L17 24l-4-3 35-10z"></path>
</svg>
';

const container_body = "
flex flex-col
w-full
max-w-md
p-10
mx-auto
my-6
transition
duration-500
ease-in-out
transform
bg-white
rounded-lg
md:mt-0
";

const table1_style = '
<style>
	.table {
		border-spacing: 0 15px;
	}

	i {
		font-size: 1rem !important;
	}

	.table tr {
		border-radius: 20px;
	}

	tr td:nth-child(n+3),
	tr th:nth-child(n+3) {
		border-radius: 0 .625rem .625rem 0;
	}

	tr td:nth-child(1),
	tr th:nth-child(1) {
		border-radius: .625rem 0 0 .625rem;
	}
</style>
';

const table1_div_head = '
<div class="flex justify-center min-h-screen mt-4">
    <div class="col-span-12">
        <div class="overflow-auto lg:overflow-visible ">';

const table1_div_foot = '</div></div></div>';

const table1_link = '<link
href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
rel="stylesheet">';

const table1_start = '<table class="table text-gray-400 border-separate space-y-6 text-sm">';
const table1_end = '</table>';
const table1_head = '<thead class="bg-gray-800 text-gray-500">';
const table1_head_foot = '</thead>';
const table1_body_start = '<tbody>';
const table1_body_end = '<tbody>';

const main_body = '';


function getStudents(){
    $students = student::all();
    if (count($students) != 0) {
        echo table1_div_head;
        echo table1_start;
        echo table1_head;

        echo '
            <tr>
                <th class="p-3">Student</th>
                <th class="p-3 text-left">view</th>
                <th class="p-3 text-left">Edit</th>
            </tr>';
        echo table1_head_foot;
        echo table1_body_start;
        foreach ($students as $student) {
            echo '
            <tr class="bg-gray-800">
                <td class="p-3">
                    <div class="flex align-items-center">
                        <img class="rounded-full h-12 w-12  object-cover" src="https://images.unsplash.com/photo-1613588718956-c2e80305bf61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80" alt="unsplash image">
                        <div class="ml-3">
                            <div class="">'.$student->fisrt_nm.' '.$student->last_nm.'</div>
                            <div class="text-gray-500">'.$student->email.'</div>
                        </div>
                    </div>
                </td>
                <td class="p-3">
                    <a href="'.route('admin.getstudent',$student->id).'" class="text-gray-400 hover:text-gray-100 mr-2">
                        <i class="material-icons-outlined text-base">visibility</i>
                    </a>
                </td>
                <td class="p-3 ">
                    <a href="'.route("admin.editstudent",$student->id).'" class="text-gray-400 hover:text-gray-100  mx-2">
                        <i class="material-icons-outlined text-base">edit</i>
                    </a>
                </td>
            </tr>';
        }
        echo table1_body_end;
        echo table1_end;
        echo table1_div_foot;
    } else {
        echo "No Student Added ";
    }
    

}

function getStudentById($id){
    return student::find($id);
}

function getTable1($students,$thead,$tdata){
    echo table1_div_head;
    echo table1_start;
    echo table1_head;
    echo '<tr>';
    foreach ($thead as $head ) {
        echo '<th class="p-3">'.$head.'</th>';
    }
    echo '</tr>';
    echo table1_head_foot;
    echo table1_body_start;
    for ($i=0; $i < $students; $i++) { 
        echo '<tr class="bg-gray-800">';
        foreach ($tdata as $data ) {
                echo '<td class="p-3">';
                echo $data;
                echo '</td>';
            }
        echo '</tr>';
    }
    echo table1_body_end;
    echo table1_end;
    echo table1_div_foot;
}

function sidebar_getStudent(){
    $student = student::all();
    if ($student) {
        return $student;
    }
}


function getStudentTableById($id){
    $student = student::find($id);
    $thead = [
        'thead1' => 'User',
        'thead2' => 'Edit',
        'thead3' => 'Delete'
    ];

    $tdata = [
        'tdata1' => '
                    <div class="flex align-items-center">
                        <img class="rounded-full h-12 w-12  object-cover" src="https://images.unsplash.com/photo-1613588718956-c2e80305bf61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80" alt="unsplash image">
                        <div class="ml-3">
                            <div class="">'.$student->fisrt_nm.' '.$student->last_nm.'</div>
                            <div class="text-gray-500">'.$student->email.'</div>
                        </div>
                    </div>',
        'tdata2' => "<div>
                        <a class='".submit_button."'  href='".route("admin.editstudent",$student->id)."'>Edit Student</a> 
                    </div>
                    ",
        'tdata3' => "
                    <div>
                        <a class='".submit_button."' wire:click='deleteStudent()'>Delete Student</a> 
                    </div>
                    ",
    ];
    getTable1(1,$thead,$tdata);
}


function getStudentButton(){
    echo "
    <div>
        <a class='".submit_button."'  href='".route("admin.addstudent")."'>Add Student</a> 
    </div>
    ";
}

function getAddNumberButton(){
    echo "
    <div>
        <a class='".submit_button."'  href='".route("admin.addnumber")."'>Add Number</a> 
    </div>
    ";
}

function getDeleteNumberButton(){
    echo "
    <div>
        <a class='".submit_button."'  href='".route("admin.addnumber")."'>Add Number</a> 
    </div>
    ";
}
