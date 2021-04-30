@extends('master')

{{-- @section('content')

@endsection --}}
@section('content')
<div class="card">

<h1 align='center'>All Members</h1>

@foreach ($users as $user)
<div class="card">
            <div class="card">
                <div class="card-body">
                    <a href="{{ url('/user/' . $user->id) }}">
                    {{ $user->name}}
                    </a>
                    {{-- <form align='right' action='/list/{{ $user->id }}/follow', method='POST'>
                    @csrf
                    <button type='submit' class='btn btn warning' style='background-color:#a5a5e7'>Follow</button>
                    </form>
                    <form align='right' action='/list/{{ $user->id }}/unfollow', method='POST'>
                    @csrf
                    @method('DELETE')
                    <button type='submit' class='btn btn warning' style='background-color:#d69696'>Unfollow</button>
                    </form> --}}
                    @if (Auth::user()->is_following($user->id) || Auth::user()->id == $user->id)
                    <div align='right' class="ml-auto">
                        <a href="{{ route('user.unfollow', ['unfollowed_id' => $user->id]) }}" class="btn btn-danger">Unfollow</a>
                    </div>
                    @else
                    <div align='right' class="ml-auto">
                        <a href="{{ route('user.follow', ['followed_id' => $user->id]) }}" class="btn btn-primary">Follow</a>
                    </div>
                    @endif
                </div>
    </div>

</div>
{{-- <a href="{{ route('user.following', ['id' => $user->id]) }}"> {{ $user->following()->count() }}</a>
<a href="{{ route('user.followers', ['id' => $user->id]) }}"> {{ $user->followers()->count() }}</a> --}}

@endforeach
</div>
@endsection

