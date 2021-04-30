@extends('master')


@section('content')


<h1> Showing the suggestion</h1>
<br>
<div>
    <h3>Suggestion :#{{ $suggests->id }} </h3>
    <p> Author : {{ $suggests->author }} </p>
    <p> Author : {{ $suggests->content }} </p>
</div>

@endsection

