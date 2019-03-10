@extends('layout.main')

@section('content')

<div class="col-md-6">
    <h1>Edit current task</h1>
    <form method="post" action="{{ route('tasks.update', ['id' => $tasks->id]) }}">
        @csrf
        <div class="form-group">
            <label for="title"><strong>Title:</strong></label><br>
            <input type="text" name="title" class="form-control" value="{{ $tasks->title }}"><br><br>
        </div>
        <div class="form-group">
            <label for="body"><strong>Body:</strong></label><br>
            <input name="body" class="form-control" value="{{ $tasks->body }}"><br><br>
        </div>
        <div class="form-group">
            <label for="status"><strong>Status:</strong></label><br>
            <input type="radio" name="status" class="form-control" value="Done">Done<br>
            <input type="radio" name="status" class="form-control" value="Busy">Busy<br>
            <input type="radio" name="status" class="form-control" value="Not started">Not started<br>
        </div>
        <div class="form-group">
            <label for="duur"><strong>Duur:</strong></label><br>
            <input type="text" name="duur" class="form-control" value="{{ $tasks->duur }}"><br><br>
        </div>
            <button type="submit" class="btn btn-success">Edit task</button>
    </form>
</div>

@endsection