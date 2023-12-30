@extends('layouts.master')


@section('content')
{{-- <h1>{{__('frontend.test')}}</h1> --}}


<div>
    <div class="display-3">{{__('frontend.test')}}</div>
    <p>Localization + translation</p>

    <div class="row">
        <ul class="row">
            <li>Home</li>
            <li>About</li>
            <li>Contact</li>
            <li>More</li>
        </ul>
    </div>
</div>



@endSection