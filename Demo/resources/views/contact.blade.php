@extends('layouts.master')

@section('content')
    <div>
        <h1>Contact</h1>

        {{-- rendering components --}}
        <x-button />

        <br />

        {{-- from the folder  this is rendered from the call in the class --}}

        {{-- 
    FROM: App/View/Components
    public function render(): View|Closure|string
    {
        return view('components.forms.button');
    }
    --}}

        <x-forms.button />
        {{-- Different naming convention  --}}
        <x-input-field />
    </div>

    <div class="row">
        @foreach ($posts as $post)
            <x-post.index :post="$post"/>
        @endforeach
    </div>


    <br />
    <h1>Components Slots </h1>
    <x-button > 
        Test
    </x-button > 


    <br />
    <h1>Naming Slots </h1>

    <div class="row">
        @foreach ($posts as $post)
            <x-post.index2 >
                <x-slot name='title'>
                    {{$post->title}}
                </x-slot>
                <x-slot name='description'>
                    {{$post->description}}
                </x-slot>
            </x-post.index2 >
            
        @endforeach
    </div>
@endsection
