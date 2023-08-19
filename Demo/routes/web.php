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
    return "<h1>About</h1>";
})->name("about");

Route::get("contact", function(){
    return "<h1>Contact</h1>";
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