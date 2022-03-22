@extends('layout.home.index')
@section('body')
    @livewire('home.vehicle-list', ['slug' => $slug])
@endsection