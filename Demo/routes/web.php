<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function() {
    $variable = "My var";
    // return view('about.index', ["var" => $variable]);
    return view('about.index', compact('var'));
})->name("ABOUT");

Route::get("contact", function(){
    return view('contact');
});

Route::get("contact/{id}", function($id){
    return $id;
})->name("edit-contact");

Route::get("home2", function(){
    return "<a href='".route('about')."'>About</>";
});

Route::get("home", function(){
    return "<a href='".route('edit-contact', [20])."'>About</>";
});

// Route grouping

Route::group(['prefix' => 'customer'], function(){
    Route::get("/", function () {
        return "<h1>Customer get</h1>";
    });
    
    Route::get("/create", function () {
        return "<h1>Customer create</h1>";
    });
    
    Route::get("/show", function () {
        return "<h1>Customer show</h1>";
    });
});


// Fallback route

Route::fallback(function(){
    return "Route not exists";
});