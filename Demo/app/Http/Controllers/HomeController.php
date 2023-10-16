<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Address;

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

        // $posts = Post::all();

        // foreach($posts as $post) {
        //     echo $post->title;
        // }

        // You can chain it of course - many where methods
        // return Post::where('id', '>', 10)->get();

        // it works like if() else if()
        // return Post::where('id', '>', 10)->orWhere('id','=', 61)->get();


        // vid 51
        // $post = new Post();
        // $titleString = 'Post 444444';
        // $post->title = $titleString;
        // $post->description = "this is the description";
        // $post->category_id = 1;
        // $post->image = "image";

        // $post->save();

        // // dd("success");
        // return Post::where('title', '=', $titleString)->get();


        // updating data with eloquent

        // Collection
        // $post = Post::where('image', '=', 'default')->get();
        // $post = Post::get();


        // $post = Post::find(60);
        // $post-> title = "This is a new title";
        // $post->save();
        // return $post;


        // Deleting data
        // Post::find(60)->delete(); // if data is not present error, because delete is called on null

        // Post::findOrFail(60)->delete();

        // Post::where('id', 60)->delete();

        // dd('success');

        // $post = Post::find(60);
        // return $post ?? 'empty';


        // Mass  Assignment

        //  create
        // $post = Post::create([
        //     'title' => "this is new post",
        //     'description' => "a crazy good post",
        //     "status" => 1,
        //     'image' => 'default',
        //     'category_id'=> 1
        // ]);


        // update
        //    $post = Post::find(68)->update([
        //     'title' => "a crazy update !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!1"
        //    ]);

        //    $post = Post::find(68);

        // mass update
        // $post = Post::where('category_id', 1)->update([
        //     'category_id' => 0
        // ]);

        // $post = Post::get();

        // return $post;




        // Soft Deleting - trashing
        // $post = Post::get();
        // $post = Post::where('id', 2)->delete();
        // $post = Post::where('id', 1)->withTrashed()->get();



        // $post = Post::onlyTrashed()->get();

        // return $post;



        // Restoring and permanent deletion
        // $post = Post::withTrashed()->find(2)->restore();
        // $post = Post::onlyTrashed()->get();

        // $post = Post::get();

        // Post::withTrashed()->find(1)->forceDelete(); // danger of calling method on null

        // return $post;




        // ------------------------------------------------------------------------------------------------------------------------------------------------------------------------

        $users = User::all();

        return view('home', compact('users'));
        // return $users;
    }
}