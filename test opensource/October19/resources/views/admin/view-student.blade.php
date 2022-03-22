@extends('layouts.app')
@section('content')
@csrf
@livewire('view-student',['user'=>$user])
@endsection