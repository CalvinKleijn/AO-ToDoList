@extends('layout.main')

@section('content')

<div class="text-center">
    <h1>Add new list</h1>
    <form method="post" action="{{ route('lists.store') }}">
        @csrf

        <label for="name">Name:</label><br>
        <input type="text" name="name"><br><br>

        <button type="submit" class="btn btn-success">Add list</button>
        <a href="{{ route('lists.index') }}" class="btn btn-primary">Go back</a> 
    </form>
</div>

@endsection