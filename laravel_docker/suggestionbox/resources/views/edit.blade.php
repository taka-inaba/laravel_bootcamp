@extends('master')


@section('content')


<h1> Edit the suggestion</h1>

<form action='/home/{{ $suggests->id }}' method='POST'>
    @csrf
    @method('PATCH')
    <div class="form-group">
        <Label>Author : </Label>
        <input type='text' name='author' class = 'form-control' value='{{ $suggests->author }} '>
        <br>
    </div>
        <div class="form-group">
        <Label>Content : </Label>
        <input type='text' name='content' class = 'form-control' value='{{ $suggests->content }}'>
        <br>
    </div>
    <button type='submit' class='btn btn-primary'>Update</button>
    <form method='GET' action='/home' >
    @csrf
    <button type='submit' class='btn btn-Secondary'>Back</button>
    </form>
</form>


@endsection
