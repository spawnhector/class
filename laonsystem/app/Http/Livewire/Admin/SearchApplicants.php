<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class SearchApplicants extends Component
{
    public $search;

    public function render()
    {
        if ($this->search) {
            $this->search();
        }
        return view('livewire.admin.search-applicants');
    }

    public function search(){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://10.44.16.170:8080/api/search/'.$this->search.'',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Accept: application/json'
        ),
        ));
        $response = json_decode(curl_exec($curl));

        curl_close($curl);
        $this->emit('search',$response,true);
    }
}
