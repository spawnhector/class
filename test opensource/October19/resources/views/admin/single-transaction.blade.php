@extends('layouts.app')
@section('content')
@csrf
@livewire('single-transaction',['user'=>$user])
@endsection