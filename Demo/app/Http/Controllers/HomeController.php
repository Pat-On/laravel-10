<?php

namespace App\Http\Controllers;

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
        // Query Builder
        // return DB::table('posts')->get();
        // return DB::table('posts')->find(1);

        // retrieve a list of column values
        // return DB::table('posts')->pluck('title', 'id');

        // Where
        // return DB::table('posts')->where('id', '>', '10')->where('id', '<', '15')->get();
        // return DB::table('posts')->where('id', '=', '10')->get();

        // Insert
        //     return DB::table('posts')->insert([
        //         'title' => "Test data",
        //         'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus voluptatibus vero dignissimos perspiciatis quae voluptas aperiam provident veniam optio dolorum similique atque recusandae eligendi fugit porro eum incidunt, quo iusto.',
        //         'status' => 1,
        //         'publish_date' => date('Y-m-d'),
        //         'user_id' => 1
        //     ],
        //     [
        //         'title' => "Test data 222222222222222222222222",
        //         'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus voluptatibus vero dignissimos perspiciatis quae voluptas aperiam provident veniam optio dolorum similique atque recusandae eligendi fugit porro eum incidunt, quo iusto.',
        //         'status' => 1,
        //         'publish_date' => date('Y-m-d'),
        //         'user_id' => 1
        //     ],
        // );

        // Update
        // DB::table('posts')->where('id', '10')->update(['description' => "updated " . now()]);

        // return DB::table('posts')->where('id', '10')->get();


        // Delete
        // DB::table('posts')->where('id', '10')->delete();
        // return DB::table('posts')->where('id', '10')->get();

        // Joining
        // return DB::table('posts')->join('categories', 'posts.category_id', 'categories.id')->get();

        // Aggregation
        // return DB::table('posts')->max('id');


        // DB::table('posts')->delete(11);
        // return DB::table('posts')->where('id', '11')->get();

        // $blogs = [
        //     [
        //         'title' => 'title',
        //         'body' => 'body',
        //         'status' => 1
        //     ],
        //     [
        //         'title' => 'title',
        //         'body' => 'body',
        //         'status' => 1
    
        //     ],
        //     [
        //         'title' => 'title',
        //         'body' => 'body',
        //         'status' => 0
    
        //     ],
        //     [
        //         'title' => 'title',
        //         'body' => 'body',
        //         'status' => 1
    
        //     ],
        // ];
        // return view("home", compact("blogs"));
    



        /**
         * 
         * 1. retrieving all data
         * 2. retrieving single data
         * 3. Retrieving single data or throw error
         * 
         */

        //  1 return collection
        // return $posts = Post::all(); // DB::table('posts')->get();

        // 2
        // return Post::find(37);

        // 3
        // return Post::findOrFail(37);

        $posts = Post::all();

        foreach($posts as $post) {
            echo $post->title;
        }

    }
}
