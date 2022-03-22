@extends('body/admin')
@section('content')
    @livewireScripts
    @livewire('view-student',['user_id'=>$user_id])
@endsection