@extends('master')

@php

    class Student{
        public $name = 'taka';
    }

    $user = new Student;
    $user->name;

@endphp

@section('content')
<div class="text-center">
    <h1>This is the greatest Home Page! </h1>
    @include('a1')
    @include('a2')
    @include('post')
    <h4>My name is {{ $user->name }} </h4>
    @if ($user->name == 'tantan')
        <h6>HELLO TANTAN</h6>
    @endif

    @for ($i = 0; $i < 10; $i++)
        <p>The current value is {{ $i }} </p>
    @endfor


</div>
@endsection



