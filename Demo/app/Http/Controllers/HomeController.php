<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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

        $blogs = [
            [
                'title' => 'title',
                'body' => 'body',
                'status' => 1
            ],
            [
                'title' => 'title',
                'body' => 'body',
                'status' => 1
    
            ],
            [
                'title' => 'title',
                'body' => 'body',
                'status' => 0
    
            ],
            [
                'title' => 'title',
                'body' => 'body',
                'status' => 1
    
            ],
        ];
        return view("home", compact("blogs"));
    }
}
