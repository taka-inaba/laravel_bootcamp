<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        $books = Book::all();
        // $books = Book::where('title', '=', 'book2')->get();

        return view('books', compact('books'));
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        // dd($request->all());

        Book::create([
            'title' => $request->title,
            'description' =>$request->description
        ]);

        return redirect('/books')->with('success', 'book was created');
    }


    public function show(Book $book) {

        // $book = Book::find($id);

        return view('book', compact('book'));
    }



    public function edit(Book $book) {

        // dd($request->all());

        // $book = Book::find([
        //     'title' => $request->title,
        //     'description' => $request->description
        // ]);



        return view('edit', compact('book'));

    }

    public function update(Book $book, Request $request) {

        $book->update([
             'title' => $request->title,
             'description' => $request->description
        ]);

        return redirect('/books')->with('success', 'book was already updated');

    }

    public function delete(Book $book, Request $request) {

        $book->delete();

        return redirect('/books')->with('success', 'book was deleted');

    }

}
