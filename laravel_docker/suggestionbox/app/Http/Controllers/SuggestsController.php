<?php

namespace App\Http\Controllers;

use App\Suggests;
use Illuminate\Http\Request;

class SuggestsController extends Controller
{
    public function index(){
        $suggests = Suggests::all();

        return view('home', compact('suggests'));
    }
    public function create(){
        $suggests = Suggests::all();

        return view('create', compact('suggests'));
    }

    public function store(Request $request ){

        Suggests::create([
            'author' => $request->author,
            'content' => $request->content
        ]);

        return redirect('/home')->with('success', 'successfuly created!');
    }

    public function show(Suggests $suggests ){
        return view('show', compact('suggests'));
    }

    public function edit(Suggests $suggests ){
        return view('edit', compact('suggests'));
    }

    public function update(Suggests $suggests, Request $request ){

        $suggests->update([
            'author' => $request->author,
            'content' => $request->content
        ]);

        return redirect('/home')->with('success', 'successfuly updated!');
    }


    public function delete(Suggests $suggests, Request $request ){

        $suggests->delete();

        return redirect('/home')->with('success', 'successfuly deleted!');
    }
}
