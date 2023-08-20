<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
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
