<h1>Edit a book</h1>

{{--
<form method='POST' action = '/books'>
    @csrf
    <label>Title: </label>
    <input type="text" name="title">
    <br>
    <label>Description: </label>
    <input type="text" name="description">
    <br>
    <button type="submit">Edit</button>
</form> --}}


<div class="row">
    <div class="col-4">
        <div class="card">
            <h4 class="card-titlel"> Editting Book #{{$book->id }}</h4>
            <form action='/books/{{ $book->id }}' method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                        <label for='title'>Title</label>
                        <input type="text" name ="title" class="form-control" value="{{ $book->title }}">
                    </div>
                    <div class="form-group">
                        <label for='description'>Title</label>
                        <input type="text" name ="description" class="form-control" value="{{ $book->description }}">
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>






