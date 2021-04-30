<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // only logged in users can access
        $this->middleware('auth');
    }


    public function create(User $user, Post $posts){

        // $posts = $user->posts()->get();
        $posts = Post::where('user_id',$user->id)->get();

        return view('show', compact('posts', 'user_id','user'));
    }

    public function store(User $user, Request $request){



        Post::create([
            'user_id' => Auth::user()->id,
            'content' => $request->content
        ]);

        return view('show', compact('user_id', 'user'));
        // return redirect('/user');
    }

    public function edit(Post $posts){
        return view('edit', compact('posts'));
    }

    public function update(Post $posts, Request $requests){
        $posts->update([
            'content' => $requests->content
        ]);

        return redirect('/user');
    }

    public function delete(Post $posts){
        $posts->delete();
        return redirect('/user');
    }

}
