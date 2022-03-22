<?php

use App\Http\Controllers\helperController ;
use App\Models\documents;
use App\Models\Payment_history;
use App\Models\Subject;
use App\Models\SubjectChoice;
use App\Models\Transaction;
use Illuminate\Support\Carbon;

const table = "table-auto border-collapse w-full";
const th_px_py = "px-4 py-2";
const td_color = "px-4 py-4";
const tr_style = "font-size: 0.9674rem";
const th_color = "px-4 py-2 bg-gray-200 ";
const th_style = "background-color:#f8f8f8";
const tb_color = "text-sm font-normal text-gray-700";
const tr_color = "rounded-lg text-sm font-medium text-gray-700 text-left";
const tr_hover_color = "hover:bg-gray-100 border-b border-gray-200 py-10";
const div_start = "<div>";
const div_end = "</div>";
const hide_div = "display:none;";
const card1 = "card1";
const card1_color = "green";
const style_ml_1 = "left: -1px;";
const approve_note = "Please approve student to view payment";


class help extends helperController{
    
    function getChoiceCard($details){
        // dd(helperController::getsubjectchoicedd());
        $store = json_decode($details,true);
        
        $count = 0;
        foreach ($store["data"] as $detail){
            $student = helperController::getSubjectChoiceById($detail["id"]);
            $svg = '';
            if ($student->student->gender == 'male') {
                $svg = 'storage/img/userMale.png';
            } elseif ($student->student->gender == 'female') {
                $svg = 'storage/img/dagobert83_female_user_icon.png';
            }
     
            $hide = "";
            $hide_note = "";
            // dd($student->first()->status);
            if ($detail["status"] == "0"){
                $hide = "display:none;";
            }
            if ($detail["status"] == "1"){
                $hide_note = "display:none;";
            }
            
            
        // dd($student->student);
            // dd($student->first()->subject->subject_nm);
            // dd($student->subjectChoice->first()->balanceOwed($detail["student_id"],$detail["subject_id"]));
            $pay =  $detail["student_id"].','.$detail["subject_id"].',"'.$detail["year_of_exam"].'","'.$student->subject->subject_nm.'","'.$student->balanceOwed($detail["student_id"],$detail["subject_id"]).'"';
            
            $function = "".'"test"'."";
            $param1 = "".'"is works"'."";
    
            echo 
            "
                <div class='".card1." ".card1_color."' style='".style_ml_1."'>
                    <div class='additional'>
                        <div class='user-card'>
                            <div class='level center ' >
                                <div class=''>
                                    User ID: ".$detail["student_id"]."
                                </div>
                            </div>
                            <div class='points center'>
                                Edit
                            </div>
                        
                            <img class='img' src='".asset($svg)."' alt='' style='left: 12px;'>
                        </div>
                        <div class='more-info'>
                            <h1>".$student->student->first_nm." ".$student->student->last_nm."</h1>
                            <div class='stats ml-2'>
                                <div class='addSubject'>
                                    <div class='title' >Subject</div>
                                    <div class='value'>".$student->subject->subject_nm."</div>
                                </div>
                                <div style='".$hide."' class='payment-stat-".$student->id." ml-4'>
                                    <div class='title '>Paid</div>
                                    <div class='value'>".$student->amountPaid($detail["student_id"],$detail["subject_id"])."</div>
                                </div>
                                <div style='".$hide."' class='payment-stat-".$student->id." ml-4'>
                                    <div class='title '>Balance</div>
                                    <div class='value'>".$student->balanceOwed($detail["student_id"],$detail["subject_id"])."</div>
                                </div>
                                <div style='".$hide."' class='payment-stat-".$student->id." ml-4' onclick='call(".$function.",".$param1.")'>
                                    <div class='title '>Transaction's</div>
                                    <div class='value'>".$this->studentTransactionAmount($detail["student_id"],$detail["subject_id"])."</div>
                                </div>
                                <div>
                                </div>
                            </div>
                            <div class='first-note-".$student->id." first-approve-addition' style='".$hide_note."'>
                                ".approve_note."
                            </div>
                            <div class='stats-content'>
                                <!-- .slideThree -->
                                <div class='slideThree'> 
                                    <span>Status</span>
                                    <input type='checkbox' value='None' id='slideThree".$count."' name='check' ". checkStatus($detail["status"],$detail["id"]) ." />
                                    <label for='slideThree".$count."' ></label>
                                </div>
                                <div class='loading-body loading-body".$student->id."'>
    
                                </div>
                                
                                <div class='student-pay' style='".$hide."' >
                                    <div class='box box1 button' id='one' onclick='pay(".$pay.")'>
                                        <i class='fab fa-amazon-pay'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='general'>
                        <h1>".$student->student->first_nm." ".$student->student->last_nm."</h1>
                            <div class='first-note-".$student->id." first-approve-general' style='".$hide_note."' >
                                ".approve_note."
                            </div>
                            <div class='stats ml-2'>
                                <div class='addSubject'>
                                    <div class='title' >Subject</div>
                                    <div class='value'>".$student->subject->subject_nm."</div>
                                </div>
                                <div style='".$hide."' class='payment-stat-".$student->id." ml-4'>
                                <div class='title '>Paid</div>
                                <div class='value'>".$student->amountPaid($detail["student_id"],$detail["subject_id"])."</div>
                                </div>
                                <div style='".$hide."' class='payment-stat-".$student->id." ml-4'>
                                    <div class='title '>Balance</div>
                                    <div class='value'>".$student->balanceOwed($detail["student_id"],$detail["subject_id"])."</div>
                                </div>
                                <div style='".$hide."' class='payment-stat-".$student->id." ml-4'>
                                    <div class='title '>Transaction's</div>
                                    <div class='value'>".$this->studentTransactionAmount($detail["student_id"],$detail["subject_id"])."</div>
                                </div>
                                <div class='call' id='call'>
                                </div>
                            </div>
                    </div>
                </div>
            ";
            ++$count;
        }
    }

}

function test($var){
    echo $var;
}

function checkStatus($detail,$id){
    // dd($detail->first()->status);
    if ($detail != '0') {
        return "checked";
    } else {
        return 'onclick="approveSudentSubject('.$id.')"';
    }
}

function getCard($detail){
    $card = new help();
    $card->getChoiceCard($detail);
}


function hlp_newdateformat($oldDate, $new_date_format)
{
    return Carbon::createFromFormat('Y-m-d', $oldDate)->format($new_date_format);
}

// $newDateFormat = hlp_newdateformat(date('Y-m-d'), 'm/d/Y');

function redirectAll($route){
    // dd($route);
}

const table_start = '<table class="table w-full table-compact">';
const table_end = '</table>';
const table_head = '<thead>';
const table_head_end = '</thead>';
const table_row = '<tr>';
const table_row_end = '</tr>';
const table_body = '<tbody>';
const table_body_end = '</tbody>';
function table($thead,$trow,$tname = null){
    echo '<br>';
    echo '<hr>';
    echo '<div class="width-100 text-center mt-16 bg-white-500"><h1>'.$tname.'</h1></div>';
    echo table_start;
        echo table_head;
        echo table_row;
            foreach ($thead as $head ) {
                echo '<th>'.$head.'</th>';
            } 
        echo table_row_end;
        echo table_head_end;
        echo table_body;
            foreach ($trow as $row ) {
                echo $row;
            }
        echo table_body_end; 
    echo table_start;
}

function getSubject($id){
    return Subject::find($id);
}

function getPaymentHistory($id){
    return Payment_history::where('student_id','=',$id)->get();
}

function getTransactionHistory($id){
    return Transaction::where('student_id','=',$id)->get();
}
function setStatus($status){
    if ($status == 1) {
        return 'Approved';
    } else {
        return 'Rejected';
    }
}

function hasFile($student,$subject){
    $test = documents::where('student_id','=',$student)->where('subject_id','=',$subject)->first();
    if($test){
        return true;
    }else{
        return false;
    }
}

function allOptionSubject(){
    $subject = Subject::all();
    foreach ($subject as $sub ) {
        echo '<option value="'.$sub->id.'">'.$sub->subject_nm.'</option>';
    }
}

const add_teacher_div = "flex flex-col
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
md:mt-0";

const password_btn = "block
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

const submit_btn = "flex
items-center
justify-center
w-full
px-2
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
focus:ring-blue-500";


?>