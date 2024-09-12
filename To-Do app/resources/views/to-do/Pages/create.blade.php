@extends('to-do.Layouts.app');

@section('content')

<h1>Create New To-Do</h1>

<form action="{{ route('todos.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" name="title" class="form-control" required>
    </div>
    <div class="pt-3">
        <button type="submit" class="btn btn-primary">Create</button>
    </div>
   
</form>
   

   
@endsection