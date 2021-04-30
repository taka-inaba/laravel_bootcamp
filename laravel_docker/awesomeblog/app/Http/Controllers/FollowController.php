<?php

namespace App\Http\Controllers;

use App\Follow;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{
    public function follow(User $user, Request $requests){

        Follow::Create([
            'user_id' => Auth::user()->id,
            'follow_id' => $user->id
        ]);

        return back();
    }

    public function unfollow(Follow $follows){

        Auth::user()->follows->first->delete();
        return back();

    }

}
