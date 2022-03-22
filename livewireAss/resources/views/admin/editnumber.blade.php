@extends('body/admin')
@section('content')
    @livewireScripts
    @livewire('edit-number', ['person' => $person])
@endsection