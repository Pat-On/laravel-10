@extends('layouts.master')

@section('content')
  <main role="main" class="container">
    <h1 class="mt-5 text-danger">Home</h1>
    <div class="card">
      <form action="{{route('upload-file')}}" method="POST" enctype="multipart/form-data">
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
  </main>

@endsection

