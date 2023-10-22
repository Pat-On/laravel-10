@extends('layouts.master')

@section('content')
    <div class="main-content">
        <div class='card'>
            <div class='card-header'>
                All Trashed Posts
                <a class='btn btn-success'href="">Back</a>
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
                        <tr>
                            <th scope="row">1</th>
                            <td><img src="https://picsum.photos/200" alt="" width="80"></td>
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
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
