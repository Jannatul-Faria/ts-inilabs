@extends('to-do.Layouts.app');

@section('content')
<div class="container">
    <h1>Edit To-Do</h1>
    <div class="text-end m-3">
        <a href="{{ route('todos.index') }}" class="btn btn-primary">Back</a>
     </div>
    <form action="{{ route('todos.update', $todo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" class="form-control" value="{{ $todo->title }}" required> 
        </div>
        <div class="form-group">
            <label for="completed">completed:</label>
            <input type="checkbox" name="completed"  {{ $todo->completed ? 'checked' : '' }}> 
        </div>

        <div class="pt-3">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
       
    </form>
       
    
       
</div>

@endsection