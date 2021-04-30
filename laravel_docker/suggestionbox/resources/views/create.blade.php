@extends('master')


@section('content')


<h1> Create a new suggestion</h1>
<br>
<div style="display:inline-flex">
<form method='POST' action='/home'>
    @csrf

<div class="form-group">
    <Label>Author : </Label>
    <input type='text' name='author' class='form-control'>
    <br>
</div>
<div class="form-group">
    <Label>Content : </Label>
    <input type='text' name='content' class='form-control'>
    <br>
</div>
    <button type='submit' style='background-color:yellowgreen'>Create</button>
    <form method='GET' action='/home' >
    @csrf
    <button type='submit'>Back</button>
</form>
</form>
</div>
@endsection
