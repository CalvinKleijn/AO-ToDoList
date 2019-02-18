@extends('layout.main')

@section('content')

<div class="text-center">
    <h1>Edit current list</h1>
    <form method="post" action="{{ route('lists.update', ['id' => $lists->id]) }}">
        @csrf

        <label for="name">Name:</label><br>
        <input type="text" name="name" value="{{ $lists->name }}"><br><br>

        <button type="submit" class="btn btn-success">Edit list</button>
        <a href="{{ route('lists.index') }}" class="btn btn-primary">Go back</a> 
    </form>
</div>

@endsection