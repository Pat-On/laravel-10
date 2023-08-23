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

        // Insert
        return DB::table('posts')->insert([
            'title' => "Test data",
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus voluptatibus vero dignissimos perspiciatis quae voluptas aperiam provident veniam optio dolorum similique atque recusandae eligendi fugit porro eum incidunt, quo iusto.',
            'status' => 1,
            'publish_date' => date('Y-m-d'),
            'user_id' => 1
        ],
        [
            'title' => "Test data 222222222222222222222222",
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus voluptatibus vero dignissimos perspiciatis quae voluptas aperiam provident veniam optio dolorum similique atque recusandae eligendi fugit porro eum incidunt, quo iusto.',
            'status' => 1,
            'publish_date' => date('Y-m-d'),
            'user_id' => 1
        ],
    );

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
