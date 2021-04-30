<?php

namespace App\Http\Controllers;

use App\Suggests;
use App\Vote;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function upvote(Suggests $suggests){

        Vote::Create([
            'suggestion_id' => $suggests->id
        ]);

        return back();
    }

    public function downvote(Vote $votes, Suggests $suggests){

        $suggests->votes->first->delete();

        return back();
    }
}
