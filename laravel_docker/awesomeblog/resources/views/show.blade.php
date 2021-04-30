@extends('master')


@section('content')

<h1>User Page</h1>



<div class="row">
    <div class="col-4">
        <div class="card">
            <div class="card-body">
        <br>
        <br>
        <br>
                <h2> {{ $user->name }}</h2>

<div align='center' class="display:inline-flex">
<a href="{{ route('user.following', ['id' => Auth::user()->id]) }}"> {{ Auth::user()->following()->count() }} <p>following</p></a>
<a href="{{ route('user.followers', ['id' => Auth::user()->id]) }}"> {{ Auth::user()->followers()->count() }} <p>followers</p></a>
</div>
        <br>
        <br>
        <br>
            </div>
        </div>
    </div>
    <div class="col-8">
        <div class="card">
            @if (Auth::user()->id == $user->id)
            <div class="card-body">
                <div class="form-group">
                    <form method='POST' action='/user/{{Auth::user()->id}}'>
                        <input type='text' name='content' class='form-control'>
                        @csrf
                        <button type='submit' style="position: absolute; right: 30px; top: 60px">POST</button>
                    </form>
                </div>
            </div>
            @else
            @endif

<br>

{{-- <div class="row">
    <div class="col-8"> --}}
        <div class="card">

            <h1 align='center'>Blogs</h1>

        @if(Auth::user()->is_following($user->id) || Auth::user()->id == $user->id)
            {{-- <div class="row"> --}}
            @foreach ($posts as $post)

                <div class="col-12">
                    <div class="card">
                        <div align='right' class="display:inline-inline">
                        <form action='/user/{{ $post->id }}/edit' method='GET'>
                            @csrf
                            <button type='submit' class='btn btn-warning' style='background-color:#b2e7b2'>Edit</button>
                        </form>
                        <form action='/user/{{ $post->id }}/edit' method='POST'>
                            @csrf
                            @method('DELETE')
                            <button type='submit' class='btn btn-warning' style='background-color:red'>Delete</button>
                        </form>
                    </div>
                        <div align='center' class="card-body">
                            {{ $post->content }}
                        </div>
                        <p>Date: {{ $post->created_at }} </p>
                    </div>
                </div>
            {{-- </div> --}}
            @endforeach
        @else
        <h3 align='center' style="color: red">You are not following this user!</h3>
        @endif
        </div>

    </div>
</div>



@endsection

