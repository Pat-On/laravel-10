<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Address;
use App\Models\Category;
use App\Models\Tag;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use File;

// php artisan make:controller HomeController --invocable 

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        // $post = Post::with('tags')->first();


        // $tag = Tag::first();

        // $post->tags()->attach($tag);

        // you can attach as well the array 

        // $post->tags()->attach([2, 3, 4]);




        // Deleting files from the storage

        // Storage::disk('local')->delete('/images/new_image.jpg');

        // Storage::delete('/images/new_image.jpg');

        // File::delete(storage_path("/app/images/new_image.jpg"));


        // unlink(storage_path("/app/images/new_image.jpg"));

        // return storage_path("/");


        return view('home');

    }
}