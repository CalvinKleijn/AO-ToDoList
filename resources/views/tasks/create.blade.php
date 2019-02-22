@extends('layout.main')

@section('content')

<div class="text-center">
    <h1>Add new task</h1>
    <form method="post" action="{{ route('tasks.store') }}">
        @csrf

        <label for="title"><strong>Title:</strong></label><br>
        <input type="text" name="title"><br>

        <label for="body"><strong>Body:</strong></label><br>
        <input type="text" name="body"><br>

        <label for="status"><strong>Status:</strong></label><br>
        <input type="radio" name="status" value="Done">Done<br>
        <input type="radio" name="status" value="Busy">Busy<br>
        <input type="radio" name="status" value="Not started">Not started<br>

        <label for="duur"><strong>Duur: (minuten)</strong></label><br>
        <input type="text" name="duur"><br><br>

        <input type="text" name="lists_id" hidden>

        <button type="submit" class="btn btn-success">Add task</button>
    </form>
</div>

@endsection