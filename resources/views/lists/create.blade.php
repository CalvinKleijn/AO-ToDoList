@extends('layout.main')

@section('content')

<div class="col-md-6">
    <h1>Add new list</h1>
    <form method="post" action="{{ route('lists.store') }}">
        @csrf

        <div class="form-group">
	        <label for="name"><strong>Name:</strong></label><br>
	        <input type="text" class="form-control" name="name" required><br><br>
    	</div>
        
        <button type="submit" class="btn btn-success">Add list</button>
        <span><a href="{{ route('lists.index') }}" class="btn btn-primary">Go back to Lists</a></span>
    </form>
</div>

@endsection