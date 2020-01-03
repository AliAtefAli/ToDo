@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col col-md-6">
      <div class="card caed-default">
        <div class="card-header">
          Update Todo
        </div>
        <div class="card-body">
          <form action="/todos/update/{{$todo->id }}" method="POST">
            @csrf
            
            @if($errors->any())
            <!-- <div class="alert alert-danger"> -->
              <ul class="list-groub">
                @foreach($errors->all() as $error)
                <h6 class="-group-item alert alert-danger">
                  * {{$error}}
                </h6>
                @endforeach
              </ul>
              <!-- </div> -->
            @endif
            
            <div class="form-group">
              <input type="text" name="name" class="form-control" value="{{ $todo->name }}">
            </div>
            <div class="form-group">
            <textarea name="description" placeholder="Description" cols="10" rows="4" 
            class="form-control">{{$todo->description}}
            </textarea>
            </div>
            <button type="submit" class="btn btn-success">Update Item</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection