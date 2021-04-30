<?php

namespace App\Http\Controllers;

use App\User;
use App\Follow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AwesomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function show(){
        // dd($user->all());
        return view('show', compact('user'));
    }

    public function list(Follow $follows){
        // dd($user->all());
        $users = User::all();
        $follows = Follow::all();

        return view('list', compact('users', 'follows'));
    }

    public function follow($id)
    {
        $followed_user = User::find($id);
        Auth::user()->following()->attach($followed_user);
        return back();
    }

    public function unfollow($id)
    {
        $followed_user = User::find($id);
        Auth::user()->following()->detach($followed_user);
        return redirect()->back();
    }

    public function following($id)
    {
        $user = User::find($id);
        $following = $user->following()->get();
        return view('users.following','show', compact('following', 'user'));
    }

    public function followers($id)
    {
        $user = User::find($id);
        $followers = $user->followers()->get();
        return view('users.followers', 'show', compact('followers', 'user'));
    }


}
