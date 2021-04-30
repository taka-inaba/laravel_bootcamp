<h1>Create a book</h1>
<form method='POST' action = '/books'>
    @csrf
    <label>Title: </label>
    <input type="text" name="title">
    <br>
    <label>Description: </label>
    <input type="text" name="description">
    <br>
    <button type="submit">Create</button>
</form>





