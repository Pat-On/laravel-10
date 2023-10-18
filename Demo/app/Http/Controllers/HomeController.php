<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Address;
use App\Models\Category;
use App\Models\Tag;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

// php artisan make:controller HomeController --invocable 

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $post = Post::with('tags')->first();


        $tag = Tag::first();

        // $post->tags()->attach($tag);

        // you can attach as well the array 

        // $post->tags()->attach([2, 3, 4]);


        return view('home');
    }
}