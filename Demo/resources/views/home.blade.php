@extends('layouts.master')

@section('content')
  <main role="main" class="container">
    <h1 class="mt-5 text-danger">Home</h1>
    <div class="row mt-5">
      @foreach ($users as $user)
        <div class="col-md-3">
          <div class="card-body">
            <h4>{{$user->name}}</h4>
            <p>{{$user->email}}</p>
            <p>{{$user->address?->address}}</p>
          </div>
        </div>
      @endforeach
    </div>
  </main>

@endsection

