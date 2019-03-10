@extends('layout.main')

@section('content')

            <h1>Tasks</h1>

            <form action="#">   
                <table class="table table-striped">
                    <thead>
                        @forelse($tasks as $task)
                        <tr>
                            <th>Title</th>
                            <th>Body</th>
                            <th>@sortablelink('status')</th>
                            <th>Duur</th>
                            <th>Created at</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $task->title }}</td>
                            <td>{{ $task->body }}</td>
                            <td>{{ $task->status }}</td>
                            <td>{{ $task->duur }} minuten</td>
                            <td>{{ date('d-m-Y', strtotime($task->created_at)) }}</td>
                            <td><a href="#">Edit</a></td>
                            <td><a href="#">Delete</a>
                        </tr>
                    </tbody>
                        @empty
                            <tr>
                                <td>No tasks found for this list</td>
                            </tr>
                        @endforelse
                </table>
            </form>

            <span><a href="{{ route('lists.index') }}" class="btn btn-primary">Go back to Lists</a></span>

@endsection

