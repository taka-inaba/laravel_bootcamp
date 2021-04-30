{{-- <h1>Books</h1> --}}


<div>
    <h4> Book #{{$book->id }} : {{ $book -> title }}</h1>
    <p>{{ $book->description }}</p>

    <a href="{{ url('/books/' . $book->id . '/edit') }} ">
       Edit
    </a>

</div>

