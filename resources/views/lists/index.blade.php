@extends('layout.main')

@section('content')

            <h1>To do list</h1>

            <form action="#">   
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($lists as $list)
                        <tr>
                            <td><a href="#">{{ $list->name }}</a></td>
                            <td>{{ $list->created_at }}</td>
                            <td>{{ $list->updated_at }}</td>
                            <td><a href="{{ route('lists.edit', ['id' => $list->id]) }}">Edit</a></td>
                            <td><a href="{{ route('lists.delete', ['id' => $list->id]) }}">Delete</a>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </form>

            <span><a href="{{ route('lists.create') }}" class="btn btn-primary" ><i class="fas fa-plus"></i> Create List</a></span>

@endsection