@extends('layouts.master')

@section('content')
<div class="row mt-5 justify-content-center">
    <div class="col-md-6">
        <h2 class='mb-6'>Login</h2>
        <div class="card">
            <div class='card-body'>
                <form action="">
                    <div class='mb-2'>
                        <label for="" class="form-label">User Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class='mb-2'>
                        <label for="" class="form-label">User email</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class='mb-2'>
                        <label for="" class="form-label">User Pasword</label>
                        <input type="password" class="form-control">
                    </div>
                    <button type="submit" class='btn btn-primary'>submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection