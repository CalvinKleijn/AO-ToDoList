@extends('layout.main')

@section('content')

            <h1>Tasks</h1>

            <form action="#">   
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Body</th>
                            <th>Status</th>
                            <th>Duur</th>
                            <th>Created at</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($tasks as $task)
                            <tr>
                                <td>{{ $task->title }}</td>
                                <td>{{ $task->body }}</td>
                                <td>{{ $task->status }}</td>
                                <td>{{ $task->duur }} minutes</td>
                                <td>{{ date('d-m-Y', strtotime($task->created_at)) }}</td>
                                <td><a href="{{ route('tasks.edit', ['ListId' => $task->lists_id, 'TaskId' => $task->id]) }}">Edit</a></td>
                                <td><a href="{{ route('tasks.delete', ['ListId' => $task->lists_id, 'TaskId' => $task->id]) }}">Delete</a>
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </form>

            <span><a href="{{ route('tasks.create', ['ListId' => $task->lists_id]) }}" class="btn btn-success">Create Task</a></span>
            <span><a href="{{ route('lists.index') }}" class="btn btn-primary">Go back to Lists</a></span>

@endsection

