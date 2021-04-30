<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $book = $request->input('title');

        return redirect('/home/create')->with('book');
    }
}
