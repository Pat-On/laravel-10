@extends('layouts.master')

@section('content')
    <div class="main-content">

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        @endif 

        <div class='card'>
            <div class='card-header'>
                Edit Posts
                <a class='btn btn-dark' href="">Back</a>
            </div>
            <div class="card-body">
                <form action="{{route('posts.update', $post->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- modification of the method --}}
                    {{-- interesting approach but there is discrapency - post/put - not clearest approach --}}
                    @method('PUT')
                    <div class="form-group">
                        <div>
                            <img style="width: 200px" src="{{asset($post->image)}}" alt="">
                        </div>
                        <label for="" class='form-label'>Image</label>
                        <input name='image' type="file" class='form-control'>
                    </div>

                    <div class="form-group">
                        <label for="" class='form-label'>Title</label>
                        <input name='title' type="text" class='form-control' value="{{$post->title}}">
                    </div>

                    <div class="form-group">
                        <label for="" class='form-label'>Category</label>
                        <select name="category_id" id="" class="form-control">
                            @foreach ($categories as $category)
                                <option {{$category->id == $post->category_id ? 'selected' : '' }} value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="" class='form-label'>Description</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$post->description}}</textarea>
                    </div>

                    <div class="form-group mt-3">
                        <button class="btn btn-primary">Suubmit</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
@endsection
