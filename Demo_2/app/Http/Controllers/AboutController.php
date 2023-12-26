<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $var = "My var";
        // return view('about.index', ["var" => $var]);
        return view('about.index', compact('var'));
    }
}
