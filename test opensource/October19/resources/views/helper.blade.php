@extends('layouts.app')

@section('content')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('Dashboard') }}
                    @php
                        if (Auth::user()->is_admin === "1") {
                            
                        }
                    @endphp 
                </div>

                <div class="test" {{ultimateSkill::onclick('call("raphael","7")')}}>
                    test
                </div>
                <div class='call' id='call'>
                </div>
                <div class="card-body">
                    @php
                        $table = new help()
                    @endphp
                    <div class="overflow-x-auto mt-6">

                        <table class="{{table}}">
                            <thead>
                                <tr class="{{tr_color}}" style="{{tr_style}}">
                                <th class="{{th_color}}" style="{{th_style}}">User's</th>
                                <th class="{{th_px_py}} " style="{{th_style}}">Subject</th>
                                <th class="{{th_px_py}} " style="{{th_style}}">Status</th>
                                </tr>
                            </thead>
                            <tbody class="{{tb_color}}">
                                @foreach ($table->getSubjectChoice() as $students)
                                    <tr class="{{tr_hover_color}}">
                                        <td class="{{td_color}}">{{$students->student->first_nm}} {{$students->student->last_nm}}</td>
                                        <td class="{{td_color}}">{{$students->subject->subject_nm}}</td>
                                        <td class="{{td_color}}">{{$students->status}}</td>
                                        {{-- <td class="px-4 py-4">{{$table->countSubjectChoice($students->student->id,$students->subject->id)}}</td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    </div>

                    <style>

                    thead tr th:first-child { border-top-left-radius: 10px; border-bottom-left-radius: 10px;}
                    thead tr th:last-child { border-top-right-radius: 10px; border-bottom-right-radius: 10px;}

                    tbody tr td:first-child { border-top-left-radius: 5px; border-bottom-left-radius: 0px;}
                    tbody tr td:last-child { border-top-right-radius: 5px; border-bottom-right-radius: 0px;}


                    </style>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal-frame">
    <div class="modal">
        <div class="modal-inset">
            <div class="button close">
                <i class="fa fa-close"></i>
            </div>
            <div class="modal-body">
                <div class="modal-head"></div>
                <div class="close"><i class="far fa-window-close"></i></div>
                <div class="modal-body-body " >
                    <div class="loading">Loading&#8230;</div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal-overlay"></div>
  

@extends('admin.script');
@endsection
