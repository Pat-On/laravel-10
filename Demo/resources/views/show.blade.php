@extends('layouts.master')

@section('content')
    <div class="main-content">
        <div class='card'>
            <div class='card-header'>
                Show Post
                <a class='btn btn-success'href="{{ route('posts.create') }}">Create</a>
                <a class='btn btn-dark' href="">Trashed</a>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tbody>
                        {{-- <tr> --}}
                            {{-- <th scope="row">{{ $post->id }}</th> --}}
                            {{-- php artisan storage:link --}}
                            {{-- TODO: fix this image -I forgot how to map it ^^ some settings --}}
                            {{-- <td><img src="{{ asset('public/storage/' . $post->image) }}" alt="" width="80"></td> --}}
                            {{-- <td>{{ $post->title }}</td> --}}
                            {{-- <td>{{ $post->description }}</td> --}}
                            {{-- <td>{{ $post->category_id }}</td> --}}
                            {{-- <td>{{$post->created_at ? date('d-m-Y', $post->created_at) : $post->created_at}}</td> --}}
                            {{-- <td>{{$post->created_at }}</td> --}}
                            {{-- <td>{{ date('d-m-Y', strtotime($post->created_at)) }}</td> --}}
                            {{-- <td> --}}
                                {{-- <a class="btn-sm btn-success" href="">show</a> --}}
                                {{-- <a class="btn-sm btn-primary" href="{{ route('posts.edit', $post->id) }}">Edit</a> --}}
                                {{-- <a class="btn-sm btn-danger" href="">Delete</a> --}}
                            {{-- </td> --}}
                        {{-- </tr> --}}


                        <tr>
                            <td>Id</td>
                            <td>{{$post->id}}</td>
                        </tr>
                        <tr>
                            <td>Title</td>
                            <td>{{$post->title}}</td>
                        </tr>
                        <tr>
                            <td>Image</td>
                            <td>
                                <img width='300' src="{{asset($post->image)}}" alt="">
                            </td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td>{{$post->description}}</td>
                        </tr>
                        <tr>
                            <td>Category</td>
                            <td>{{$post->category_id}}</td>
                        </tr>
                        <tr>
                            <td>Published</td>
                            <td>{{date('d-m-y', strtotime($post->created_at))}}</td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
