<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


// php artisan make:controller HomeController --invokable 

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
