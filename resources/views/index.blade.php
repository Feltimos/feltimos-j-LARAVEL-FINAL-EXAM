@extends('layout')

@section('content')
    <h1>Tasks</h1>
    <a href="{{ route('tasks.create') }}">Create New Task</a>
    <ul>
        @foreach($tasks as $task)
            <li>{{ $task->title }} - <a href="{{ route('tasks.edit', $task->id) }}">Edit</a> -
                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
