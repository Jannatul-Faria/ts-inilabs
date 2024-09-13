@extends('to-do.Layouts.app');

@section('content')
<div class="container">
    <h1>To-Do List</h1>
    <div class="text-end m-3">
       <a href="{{ route('todos.create') }}" class="btn btn-primary">Add New</a>
    </div>
      
   
       <ul>
           @foreach($todos as $todo)
               <li class="m-2">
                    <form action="{{ route('todos.destroy', $todo->id) }}" method="POST" style="display:inline; pe-3">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </form>
                    <a href="{{ route('todos.edit', $todo->id) }}">{{ Str::limit($todo->title, 20, '...') }}</a>
                    
                    @if ($todo->completed)
                    <span class="ms-3"><button type="btn" class="btn btn-success btn-sm" disabled><i class="fas fa-check-circle"></i></button></span>
                    @else
                    <span class="ms-3"><a class="text-black" href="{{ route('todos.edit', $todo->id) }}"><i class="fas fa-solid fa-eye"></i></a> </span>
                    @endif  
               </li>
           @endforeach
       </ul>
</div>

 
@endsection