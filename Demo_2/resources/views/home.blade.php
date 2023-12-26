@extends('layouts.master')

@section('content')
  <main role="main" class="container">

    @if($errors->any())
      @foreach($errors->all() as $error)
        <div class="alert alert-danger">{{$error}}</div>
      @endforeach
    @endif 

    {{-- php artisan storage:link --}}
    <img src="{{asset('/images/new_image.jpg')}}" style="width:600px;" alt="">

    <h1>Updated?</h1>

    <h1 class="mt-5 text-danger">Home</h1>
    <div class="card">
      <form action="{{route('upload-file')}}"   method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="">Upload</label>
          <input type="file" name='image' class='form-control'>
        </div>
        <div class="form-group">
          <button type="submit" class='btn btn-success mt-6'>SUBMIT</button>
        </div>
      </form>
    </div>


    <a class='btn btn-primary' href="{{route('download')}}">Download Image</a>
  </main>

@endsection

