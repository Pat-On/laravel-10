@extends('layouts.master')

@section('content')
    <div class="main-content">
        <div class='card'>
            <div class='card-header'>
                Trashed Posts
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
                                <td><img src="{{asset('public/storage/'.$post->image)}}" alt="" width="80"></td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->description}}</td>
                                <td>{{$post->category->name}}</td>
                                {{-- <td>{{$post->created_at ? date('d-m-Y', $post->created_at) : $post->created_at}}</td> --}}
                                {{-- <td>{{$post->created_at }}</td> --}}
                                <td>{{date('d-m-Y',strtotime($post->created_at)) }}</td>


                                <td>
                                    {{-- <a class="btn-sm btn-success" href="{{route('posts.show', $post->id)}}">show</a> --}}
                                    {{-- <a class="btn-sm btn-primary" href="{{route('posts.edit', $post->id)}}">Edit</a> --}}
                                    <a class="btn-sm btn-primary" href="{{route('posts.restore', $post->id)}}">Restore</a>

                                    {{-- <a class="btn-sm btn-danger" href="">Delete</a> --}}
                                    <form action="{{route('posts.force_delete', $post->id)}}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <button class="btn-sm btn-danger" >Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
                {{$posts->links()}}
            </div>

        </div>
    </div>
@endsection
