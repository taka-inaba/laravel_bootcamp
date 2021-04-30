@extends('master')

@section('sidebar_left')
<form method='GET' action='/home/create' >
    @csrf
    <button type='submit' class='btn btn-Primary' style='background-color:#9a9adb'>Create a New Suggestion</button>
</form>
@endsection

@section('content')
@if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        <strong>{{ Session::get('success') }} </strong>
    </div>
@endif


<caption><h1>The List of Suggestions</h1></caption>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Author</th>
            <th>Content</th>
            <th>Votes</th>
            <th>Option</th>
        </tr>
    </thead>
    @foreach ($suggests as $suggest)
        <tbody>
            <tr>
                <td>{{ $suggest->id }}</td>
                <td>{{ $suggest->author }}</td>
                <td>{{ $suggest->content }}</td>
                <td>
                    # of Votes: {{ $suggest->votes->count() }}
                    <div style="display:inline-flex">
                        <form action='/home/{{ $suggest->id }}/upvote' method='POST'>
                            @csrf
                            <button type='submit' class='btn btn-warning' style='background-color:greenyellow'>Upvote</button>
                        </form>
                        <form action='/home/{{ $suggest->id }}/downvote' method='POST'>
                            @csrf
                            @method('DELETE')
                            @if($suggest->votes->count() > 0)
                            <button type='submit' class='btn btn-warning' style='background-color:green'>Downvote</button>
                            @else
                            <button class='btn btn-warning' style='background-color:green' disabled>Downvote</button>
                            @endif
                        </form>
                    </div>
                </td>
                <td>
                    <div style="display:inline-flex">
                        <form action='/home/{{ $suggest->id }}/edit' method='GET'>
                            @csrf
                            <button type='submit' class='btn btn-warning' style='background-color:#b2e7b2'>Edit</button>
                        </form>
                        <form action='/home/{{ $suggest->id }}' method='POST'>
                            @csrf
                            @method('DELETE')
                            <button type='submit' class='btn btn-warning' style='background-color:red'>Delete</button>
                        </form>
                    </div>

                </td>
            </tr>
        </tbody>
    @endforeach
</table>
@endsection
