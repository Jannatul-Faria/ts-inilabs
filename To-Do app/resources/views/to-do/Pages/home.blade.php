@extends('to-do.Layouts.app');

@section('content')
<div class="container">
    <h1>To-Do List</h1>
    <div class="text-end m-3">
       <a href="{{ route('todos.create') }}" class="btn btn-primary">Add New</a>
    </div>
      
   
       <ul>
           @foreach($todos as $todo)
               <li  class="m-2">
                   <form action="{{ route('todos.destroy', $todo->id) }}" method="POST" style="display:inline; pe-3">
                       @csrf
                       @method('DELETE')
                       <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></button>
                   </form>
                   <a href="{{ route('todos.edit', $todo->id) }}">{{ $todo->title }}</a>
                   @if ($todo->completed)
                       <span>(Completed)</span>
                   @endif
               </li>
           @endforeach
       </ul>
</div>

 
@endsection