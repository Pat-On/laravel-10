@extends('layouts.master')

@section('content')
    <div class="main-content">
        <div class='card'>
            <div class='card-header'>
                All Posts
                <a class='btn btn-success'href="{{route('posts.create')}}">Create</a>
                <a class='btn btn-dark' href="">Trashed</a>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col" style="width: 10%">Image</th>
                            <th scope="col" style="width: 20%">Title</th>
                            <th scope="col" style="width: 30%">Description</th>
                            <th scope="col" style="width: 10%">Category</th>
                            <th scope="col" style="width: 10%">Publish Date</th>
                            <th scope="col" style="width: 10%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <th scope="row">{{$post->id}}</th>
                                {{-- php artisan storage:link --}}
                                {{-- TODO: fix this image -I forgot how to map it ^^ some settings --}}
                                <td><img src="{{asset('public/storage/uploads'.$post->image)}}" alt="" width="80"></td>
                                <td>Lorem ipsum dolor, sit amet consectetur adip</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse tempore dolor neque est
                                    molestiae.</td>
                                <td>News</td>
                                <td>02-05-2023</td>
                                <td>
                                    <a class="btn-sm btn-success" href="">show</a>
                                    <a class="btn-sm btn-primary" href="">Edit</a>
                                    <a class="btn-sm btn-danger" href="">Delete</a>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
