@extends('to-do.Layouts.app');

@section('content')

    <h1>To-Do List</h1>
 <div class="text-end">
    <a href="{{ route('todos.create') }}" class="btn btn-primary">Add New</a>
 </div>
   

    <ul>
        @foreach($todos as $todo)
            <li>
                <form action="{{ route('todos.destroy', $todo->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
                <a href="{{ route('todos.edit', $todo->id) }}">{{ $todo->title }}</a>
                @if ($todo->completed)
                    <span>(Completed)</span>
                @endif
            </li>
        @endforeach
    </ul>
@endsection