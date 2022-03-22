@extends('layout.home.index')
@section('body')
    @livewire('home.cars', ['slug' => $slug])
@endsection