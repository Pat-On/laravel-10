@extends('layouts.master')

@section('content')
  <main role="main" class="container">
    <h1 class="mt-5 text-danger">Home</h1>
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur ratione quaerat vero a, ullam reiciendis earum distinctio nihil exercitationem quidem neque odit aliquid quasi esse, repudiandae, adipisci non placeat.
  </main>
  <div class='row mt-5'>
    @foreach ($blogs as $blog)
      @if ($blog['status'] == 1)
        <div>
          <h2>{{$blog['title']}}</h2>
          <p>{{$blog['body']}}</p>
        </div>

      @else
        <div>
          <h2>hidden</h2>
        </div>

      @endif
    @endforeach


  </div>
@endsection