@extends('layouts.app')
@section('content')
@csrf
@livewire('single-payment',['user'=>$user])
@endsection