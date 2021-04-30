<h1>Create a Book</h1>
<h1>You created the new book! {{ $book ?? ''}}</h1>
<form method = 'POST' action='/home'>
    @csrf
    <Label>Book Title</Label>
    <input type='text' name='title'>
    <button type='submit'>
        Create Book!
    </button>

</form>
