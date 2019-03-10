@extends('layout.main')

@section('content')

<div class="col-md-6">
    <h1>Add new task</h1>
    <form method="post" action="{{ route('tasks.store', ['id' => $task->lists_id]) }}">
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
            <input type="radio" name="status" class="form-control" value="Done">Done<br>
            <input type="radio" name="status" class="form-control" value="Busy">Busy<br>
            <input type="radio" name="status" class="form-control" value="Not started">Not started<br>
        </div>

        <div class="form-group">
            <label for="duur"><strong>Duur: (minuten)</strong></label><br>
            <input type="text" class="form-control" name="duur"><br><br>
        </div>

        <input type="text" class="form-control" name="lists_id" hidden>

        <button type="submit" class="btn btn-success">Add task</button>
    </form>
</div>

@endsection