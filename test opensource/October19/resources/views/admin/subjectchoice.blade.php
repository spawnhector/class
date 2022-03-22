@extends('layouts.app')

@section('content')
@csrf


<link rel='stylesheet' href="{{asset('css/admin.dashboard.css')}}">
<link rel='stylesheet' href="{{asset('css/admin.subjectchoice.css')}}">
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js'></script>
<script src='https://kit.fontawesome.com/1e7319fbc7.js' crossorigin='anonymous'></script>
<div class='container'>
    <div class='row justify-content-center'>
        <div class='col-md-8'>
            <div class='card'>
                <div class='card-header cursor:pointer'><a href="{{ route('admin.home') }}">Dashboard</a>
                    <div class='d-flex justify-content-center paginate'>
                        {{$paginate->links()}}
                    </div>
                    <script>
                        $('.paginate')[0].children[0].children[0].className = 'hide'
                        $('.paginate')[0].children[0].children[1].className += ' showing-paginate'
                        $('.paginate')[0].children[0].children[1].children[0].className = 'showing-paginate-result'
                    </script>
                </div>

                <div class='card-body'>
                    @php
                        getCard($info); 
                    @endphp 
                </div>
            </div>
        </div>
    </div>
</div>

{{uniqueSkillGreatModal1()}}
{{uniqueSkillGreatModal2()}}

@extends('admin.script');
@endsection
