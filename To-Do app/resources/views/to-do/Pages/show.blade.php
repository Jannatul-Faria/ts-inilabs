@extends('to-do.Layouts.app');

@section('content')
<div class="container">
    <h1></h1>
    <div class="text-end m-3">
        <a href="{{ route('todos.index') }}" class="btn btn-primary">Back</a>
     </div>
    
            <h2>Title:</h2>
           <p>{{ $todo->title }}</p>
        </div>
        
       
  
       
    
       
</div>

@endsection