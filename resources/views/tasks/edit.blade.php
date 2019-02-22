@extends('layout.main')

@section('content')

<div class="text-center">
    <h1>Edit current task</h1>
    <form method="post" action="{{ route('tasks.update', ['id' => $tasks->id]) }}">
        @csrf

        <label for="title"><strong>Title:</strong></label><br>
        <input type="text" name="title" value="{{ $tasks->title }}"><br><br>

        <label for="body"><strong>Body:</strong></label><br>
        <input name="body" value="{{ $tasks->body }}"><br><br>

        <label for="status"><strong>Status:</strong></label><br>
        <input type="radio" name="status" value="Done">Done<br>
        <input type="radio" name="status" value="Busy">Busy<br>
        <input type="radio" name="status" value="Not started">Not started<br>

        <label for="duur"><strong>Duur:</strong></label><br>
        <input type="text" name="duur" value="{{ $tasks->duur }}"><br><br>

        <button type="submit" class="btn btn-success">Edit task</button>
    </form>
</div>

@endsection