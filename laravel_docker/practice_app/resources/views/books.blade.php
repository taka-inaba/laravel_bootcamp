@extends('master')

<style>
table{
    border-collapse: collapse;
    width: 100%;
  }

  th{
    width: 30%;
  }

  td{
    width: 30%;
  }

</style>

@if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        <strong> {{ Session::get('success') }} </strong>
    </div>
@endif





<h1>Books</h1>

<div>
    {{-- {{ $books }} --}}

    <table align = 'center' border="1" rules="rows" frame='above'>
        <caption><h1>List of all the books titles</h1></caption>

        <tr>
          <th width="20%">ID</th><th>Title</th><th>Description</th><th>Option</th>
        </tr>

        {{-- @for($i=0; $i<3; $i++)
            <tr>
            <td align='center'>{{ $books[$i]['id'] }} </td><td align='center'>{{ $books[$i]['title'] }}<button type="submit">Detail</button></td><td align='center'>{{ $books[$i]['description'] }}</td>
            </tr>
        @endfor --}}

        @foreach ($books as $book)
            <tr>
                <td>
                    {{$book->id }}
                </td>
                <td>
                    <a href="{{ url('/books/' . $book->id) }} ">
                        {{ $book ->title }}
                    </a>
                </td>
                <td>
                    {{ $book->description }}
                </td>
                <td>
                    <form action='/books/{{ $book->id }}' method="POST">
                        @csrf
                        @method('DELETE')
                        <button type='submit' class='btn btn-warning' style="background-color:red;"">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>


