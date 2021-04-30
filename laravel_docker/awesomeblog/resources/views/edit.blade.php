@extends('master')


@section('content')


<h1> Edit the Post</h1>

<form action='/user/{{ $posts->id }}/edit' method='POST'>
    @csrf
    @method('PATCH')
        <div class="form-group">
        <Label>Content : </Label>
        <input type='text' name='content' class = 'form-control' value='{{ $posts->content }}'>
        <br>
    </div>
    <button type='submit' class='btn btn-primary'>Update</button>
    <form method='GET' action='/user' >
    @csrf
    <button type='submit' class='btn btn-Secondary'>Back</button>
    </form>
</form>


@endsection
