@extends('layouts.master')

@section('content')
    <div class="main-content">
        <div class='card'>
            <div class='card-header'>
                Create Posts
                <a class='btn btn-dark' href="">Back</a>
            </div>
            <div class="card-body">
                <form action="">
                    <div class="form-group">
                        <label for="" class='form-label'>Image</label>
                        <input type="file" class='form-control'>
                    </div>

                    <div class="form-group">
                        <label for="" class='form-label'>Title</label>
                        <input type="text" class='form-control'>
                    </div>

                    <div class="form-group">
                        <label for="" class='form-label'>Title</label>
                        <select name="" id="" class="form-control">
                            <option value="">Test_1</option>
                            <option value="">Test_2</option>
                            <option value="">Test_3</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="" class='form-label'>Description</label>
                        <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <div class="form-group mt-3">
                        <button class="btn btn-primary">Suubmit</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
@endsection
