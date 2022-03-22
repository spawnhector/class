<?php

namespace App\Http\Livewire\Admin;

use App\Mail\interviewMail;
use App\Models\borrower;
use App\Models\branch;
use App\Models\interview;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
 
use \Firebase\JWT\JWT;
use GuzzleHttp\Client;
 
define('ZOOM_API_KEY', 'wAIYAymDQZ-Wkdfn2LqxpA');
define('ZOOM_SECRET_KEY', 'jVMArmFnX5gswnOHu8vRnbZHFjY69aqrFuhI');


class Dashboard extends Component
{
    public $screen = 'Dashboard';
    public $branch,
    $borrower,
    $interviews,
    $borrower_id,
    $document_id,
    $identity_doc,
    $pay_slip_doc,
    $poa_doc,
    $job_letter_doc,
    $result,
    $interview_type,
    $interview_searchResult = [],
    $searchResult;
    public $interview_start_date;
    public $interview_end_date;
    public $interview_start_time;
    public $interview_end_time;

    protected $listeners = [
        'refreshScreen',
        'refreshBranch',
        'search'
    ];

    protected $rules = [
        'interview_start_date'=>'required',
        'interview_end_date'=>'required',
        'interview_start_time'=>'required',
        'interview_end_time'=>'required',
    ];

    public function refreshScreen($screen,$id=null,$type=null) 
    {
        if ($id) {
            $this->borrower_id = $id;
            if ($type) {
                // dd($type);
                $this->interview_type = $type;
                $this->resetValidation();
            }else{
                $this->interview_type = false;
            }
        }else{
            $this->borrower_id = false;
            $this->document_id = false;
            $this->interview_type = false;
            $this->result = false;
            $this->refreshField();
            $this->resetValidation();
        }

        $this->screen = $screen;
    }

    public function refreshField(){
        
        $this->interview_start_date = '';
        $this->interview_end_date = '';
        $this->interview_start_time = '';
        $this->interview_end_time = '';
    }

    public function refreshBranch() 
    {
        $this->setBranch();
    }

    public function setBranch(){
        $this->branch = branch::get();
    }

    public function setBorrower(){
        $this->borrower = borrower::class;
    }

    public function setBorrower_Id($id){
        $this->borrower_id = $id;
    }

    public function setInterviews(){
        $this->interviews = interview::class;
    }

    public function screen($screen,$id=null,$type=null){
        if ($id) {
            if ($type) {
                // dd($type);
                $this->emit('refreshScreen',$screen,$id,$type);
            }else{
                $this->emit('refreshScreen',$screen,$id);
            }
        }else{
            $this->emit('refreshScreen',$screen);
        }
    }

    public function viewDocument($id){
        $this->document_id = $id;
    }

    public function checkVal(){

        if (!empty($this->interview_start_date)) {
            $this->resetValidation('interview_start_date');
            if (!empty($this->interview_end_date)) {
                if ($this->interview_end_date < $this->interview_start_date) {
                    $this->addError('interview_end_date', 'The end date cant be before the start date.');
                }else{
                    $this->resetValidation('interview_end_date');
                }
            }
        }

        if (!empty($this->interview_start_time)) {
            $this->resetValidation('interview_start_time');
        }

        if (!empty($this->interview_end_time)) {
            $this->resetValidation('interview_end_time');
        }

    }

    public function getDocument(){
        
        if ($this->document_id) {
            $info = borrower::find($this->document_id);
            $this->identity_doc = Storage::get($info->identity);
            $this->pay_slip_doc = Storage::get($info->pay_slip);
            $this->poa_doc = Storage::get($info->poa);
            $this->job_letter_doc = Storage::get($info->job_letter);
        }
        
    }

    public function setInterview($type=null){
        $this->validate();

        if ($type) {
            $reschedule = interview::where('borrower_id','=',$this->borrower_id)->first();
            $split1 = explode('?',$reschedule->meeting_url);
            $split2 = explode('/',$split1[0]);
            $meeting = $this->updateZoomMeeting($split2[4],'Loan Interview For '.$this->borrower::find($this->borrower_id)->full_nm.'',$this->interview_start_date,$this->interview_start_time,'60','12345');
            if ($meeting) {
                $reschedule->start_date = $this->interview_start_date;
                $reschedule->end_date = $this->interview_end_date;
                $reschedule->start_time = $this->interview_start_time;
                $reschedule->end_time = $this->interview_end_time;
                $reschedule->save()
                    ? $this->sendEmail('RESCHEDULE',$reschedule->meeting_url,$reschedule->meeting_pass)
                    : $this->result = 'Something went wrong!';
            } else {
                $this->result = 'Something went wrong!';
            }
            
        } else {
            $meeting = $this->createZoomMeeting('Loan Interview For '.$this->borrower::find($this->borrower_id)->full_nm.'',$this->interview_start_date,$this->interview_start_time,'60','12345');
            interview::create([
                'borrower_id'=> $this->borrower_id,
                'start_date'=>$this->interview_start_date,
                'end_date'=>$this->interview_end_date,
                'start_time'=>$this->interview_start_time,
                'end_time'=>$this->interview_end_time,
                'meeting_url'=>$meeting['url'],
                'meeting_pass'=>$meeting['password'],
            ])
                ? $this->sendEmail('SCHEDULE',$meeting['url'],$meeting['password'])
                : $this->result = 'Something went wrong!';
        }
        
        $this->refreshField();
    }

    public function hasInterview($id){
        $ans = $this->interviews::where('borrower_id','=',$id)->first();
        $result = '';
        $ans ? $result = $ans
            : $result = false;
        return $result;
    }

    public function sendEmail($type=null,$meet_url=null,$meet_pass=null){
        if ($type == 'SCHEDULE') {
            $detail = [
                'user'=>borrower::find($this->borrower_id)->full_nm,
                'start_date'=>$this->interview_start_date,
                'end_date'=>$this->interview_end_date,
                'start_time'=>$this->interview_start_time,
                'end_time'=>$this->interview_end_time,
                'meeting_url'=>$meet_url,
                'meeting_pass'=>$meet_pass,
                'type'=>$type
            ];
            Mail::to(borrower::find($this->borrower_id)->email)->send(new interviewMail($detail));
            $this->result = 'Interview Set';
        }
        
        if ($type == 'RESCHEDULE') {
            $detail = [
                'user'=>borrower::find($this->borrower_id)->full_nm,
                'start_date'=>$this->interview_start_date,
                'end_date'=>$this->interview_end_date,
                'start_time'=>$this->interview_start_time,
                'end_time'=>$this->interview_end_time,
                'meeting_url'=>$meet_url,
                'meeting_pass'=>$meet_pass,
                'type'=>$type
            ];
            Mail::to(borrower::find($this->borrower_id)->email)->send(new interviewMail($detail));
            $this->result = 'Interview Set';
        }
    }

    public function chechSchedule($id){
        $find = interview::where('borrower_id','=',$id)->first();
        $find ? $result = $find
            : $result = false;
        return $result;
    }

    public function search($result,$type=null){
       if ($type) {
           
            foreach ($result as $item){
                if ($get = interview::where('borrower_id','=',$item['id'])->first()) {
                    array_push($this->interview_searchResult,$get);
                }
            }
       } else {
            $this->screen = 'Search Result';
            $this->searchResult = $result;
       }
       
    }

    public function setVal(){
        $val = $this->interviews::where('borrower_id','=',$this->borrower_id)->first();
        $this->interview_start_date = $val->start_date;
        $this->interview_end_date = $val->end_date;
        $this->interview_start_time = $val->start_time;
        $this->interview_end_time = $val->end_time;
    }

    public function getZoomAccessToken() {
        $key = ZOOM_SECRET_KEY;
        $payload = array(
            "iss" => ZOOM_API_KEY,
            'exp' => time() + 3600,
        );
        return JWT::encode($payload, $key);    
    }

    public function createZoomMeeting($meet_nm,$strt_date,$strt_time,$dur,$pass) {
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://api.zoom.us',
        ]);
     
        $response = $client->request('POST', '/v2/users/me/meetings', [
            "headers" => [
                "Authorization" => "Bearer " . $this->getZoomAccessToken()
            ],
            'json' => [
                "topic" => $meet_nm,
                "type" => 2,
                "start_time" => "".$strt_date."T".$strt_time.":00",
                "duration" => $dur, // 30 mins
                "password" => $pass
            ],
        ]);
     
        $data = json_decode($response->getBody());
        $meeting['url'] = $data->join_url;
        $meeting['password'] = $data->password;

        return $meeting;
    }
     
    public function updateZoomMeeting($meeting_id,$meet_nm,$strt_date,$strt_time,$dur,$pass) {
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://api.zoom.us',
        ]);
     
        $response = $client->request('PATCH', '/v2/meetings/'.$meeting_id, [
            "headers" => [
                "Authorization" => "Bearer " . $this->getZoomAccessToken()
            ],
            'json' => [
                "topic" => $meet_nm,
                "type" => 2,
                "start_time" => "".$strt_date."T".$strt_time.":00",
                "duration" => $dur, // 45 mins
                "password" => $pass
            ],
        ]);

        if (204 == $response->getStatusCode()) {
            $stat = true;
        }else{
            $stat = false;
        }

        return $stat;
    }

    public function list_meetings($next_page_token = '') {
        $client = new Client(['base_uri' => 'https://api.zoom.us']);
    
        $arr_request = [
            "headers" => [
                "Authorization" => "Bearer ". $this->getZoomAccessToken()
            ]
        ];
    
        if (!empty($next_page_token)) {
            $arr_request['query'] = ["next_page_token" => $next_page_token];
        }
    
        $response = $client->request('GET', '/v2/users/me/meetings', $arr_request);
        
        $data = json_decode($response->getBody());
    
        if ( !empty($data) ) {
            foreach ( $data->meetings as $d ) {
                $topic = $d->topic;
                $join_url = $d->join_url;
                echo "<h3>Topic: $topic</h3>";
                echo "Join URL: $join_url";
            }
    
            if ( !empty($data->next_page_token) ) {
                $this->list_meetings($data->next_page_token);
            }
        }
    }

    public function render()
    {
        $this->setBranch();
        $this->setBorrower();
        $this->getDocument();
        $this->setInterviews();
        $this->checkVal();
        // if ($this->interview_type) {
        //     $this->setVal();
        // }
        
        return view('livewire.admin.dashboard');
    }

}
