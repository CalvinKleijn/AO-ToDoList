@extends('layout.main')

@section('content')

<div class="col-md-6">
    <h1>Add new task</h1>
    <form method="post" action="{{ route('tasks.store') }}">
        @csrf

        <div class="form-group">
            <label for="title"><strong>Title:</strong></label><br>
            <input type="text" class="form-control" name="title"><br>
        </div>

        <div class="form-group">
            <label for="body"><strong>Body:</strong></label><br>
            <input type="text" class="form-control" name="body"><br>
        </div>

        <div class="form-group">
            <label for="status"><strong>Status:</strong></label><br>
            <input type="radio" name="status" value="Done">Done<br>
            <input type="radio" name="status" value="Busy">Busy<br>
            <input type="radio" name="status" value="Not started">Not started<br>
        </div>

        <div class="form-group">
            <label for="duur"><strong>Duur: (minutes)</strong></label><br>
            <input type="text" class="form-control" name="duur"><br><br>
        </div>

        <input type="text" class="form-control" name="lists_id" value="{{ $tasks->lists_id }}" hidden>

        <button type="submit" class="btn btn-success">Add task</button>
        <span><a href="{{ route('tasks.index', ['ListId' => $task->lists_id]) }}" class="btn btn-primary">Go back to Tasks</a></span>
    </form>
</div>

@endsection