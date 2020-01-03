@extends('layouts.app')

@section('title')
  {{$todo->name}}
@endsection

@section('content')
    <div class="container my-5">
      <div class="row justify-content-center">
        <div class="col col-md-8">
          <div class="card card-default">
            <div class="card-header">
              Details
            </div>
            <div class="card-body">
              {{$todo->description}}
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
    

