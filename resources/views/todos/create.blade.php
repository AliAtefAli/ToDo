@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col col-md-6">
      <div class="card caed-default">
        <div class="card-header">
          create Todo
        </div>
        <div class="card-body">
          <form action="/store" method="POST">
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
              <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
              <textarea name="description" placeholder="Description" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Add Item</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection