@extends('master')

<style>
body{
    background-image: url("images/bl_background.png")

}
</style>

@section('content')
<h1 align='center' style="color: red">Blog Platform</h1>
<p style="font-family:cursive; color:greenyellow; font-size: 25px">Blog is a regularly updated website or web page, typically one run by an individual or small group, that is written in an informal or conversational style.</p>
@endsection


@section('sidebar_left')
<a href=" {{ route('register') }} ">REGISTER</a>

<br>
<a href=" {{ route('login') }} ">LOGIN</a>
<br>
<a href="{{ route('logout')}} ">LOGOUT</a>
<br>
<br>
<br>
{{-- <a href="{{ route('list')}} ">Users List</a> --}}
@endsection
