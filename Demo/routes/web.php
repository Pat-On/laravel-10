<?php

use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;



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

// Route::get('/home', [HomeController::class, 'index']);
Route::get('/home', HomeController::class);

// file uploading
Route::post('/upload', [ImageController::class, 'handleImage'])->name('upload-file');

Route::get('/success', function(){
    return '<h1>Successfully uploaded</h1>';
})->name('success');

Route::get('about', [AboutController::class, 'index'])->name("about");

Route::get("contact", [ContactController::class, 'index']);

Route::get("contact/{id}", function($id){
    return $id;
})->name("edit-contact");

Route::get("home2", function(){
    return "<a href='".route('about')."'>About</>";
});

// Route::get("home", function(){
//     return "<a href='".route('edit-contact', [20])."'>About</>";
// });

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

// Resource route
Route::resource('blog', BlogController::class);


// FORM

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'handleLogin'])->name('login.submit');

// CSRF TOKEN