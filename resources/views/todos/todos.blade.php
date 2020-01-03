@extends('layouts.app')

@section('title')
  ToDos
@endsection

@section('content')
    <div class="container my-5">
      <div class="row justify-content-center">
        <div class="col col-md-8">
          <div class="card card-default">
            <div class="card-header">
              Hello TODOS
            </div>
            <div class="card-body">
            <ul class="list-groub">
              @foreach($todos as $todo)
                <li class="list-group-item">{{ $todo-> name }} 
                <a href="/todos/show/{{ $todo->id}} " class="btn btn-primary btn-sm float-right">View</a>
                <a href="/todos/edit/{{$todo->id }}" class="btn btn-success btn-sm float-right mr-1">Edit</a>
                <a href="/todos/delete/{{$todo->id }}" class="btn btn-danger btn-sm float-right mr-1">Delete</a>
                </li>      
              @endforeach
            </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
    