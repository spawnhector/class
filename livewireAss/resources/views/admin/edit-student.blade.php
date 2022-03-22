@extends('body/admin')
@section('content')
    @livewireScripts
    @livewire('edit-student', ['user_id' => $user_id])
@endsection