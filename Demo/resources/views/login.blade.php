@extends('layouts.master')

@section('content')
<div class="row mt-5 justify-content-center">
    <div class="col-md-6">
        <h2 class='mb-6'>Login</h2>
        <div class="card">
            <div class='card-body'>
                <form action="{{route('login.submit')}}" method='post'>
                    @csrf
                    <div class='mb-2'>
                        <label for="" class="form-label">User Name</label>
                        <input name='name' type="text" class="form-control">
                    </div>
                    <div class='mb-2'>
                        <label for="" class="form-label">User email</label>
                        <input name='email' type="email" class="form-control">
                    </div>
                    <div class='mb-2'>
                        <label for="" class="form-label">User Pasword</label>
                        <input type="password" class="form-control">
                    </div>
                    <button name='password' type="submit" class='btn btn-primary'>submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection