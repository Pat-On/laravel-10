<?php

use App\Events\UserRegister;
use App\Http\Controllers\ProfileController;
use App\Mail\PostPublished;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Jobs\SendMail;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// Route::group(['middleware' => 'auth'], function (){
Route::middleware('auth')->group(function () {
    Route::get('/posts/trash', [PostController::class, 'trashed'])->name('posts.trashed');

    Route::get('/posts/{id}/restore', [PostController::class, 'restore'])->name('posts.restore');

    Route::delete('/posts/{id}/force-delete', [PostController::class, 'forceDelete'])->name('posts.force_delete');

    Route::resource('posts', PostController::class);
});


Route::get('user-data', function () {
    // you can access in two ways
    // Facade
    // return Auth::user(); // it will never show the password

    // global function
    return auth()->user();
});

Route::get('send-mail', function(){
    // Mail::send(new PostPublished());

    // Dispatching Job
    SendMail::dispatch();

    dd('done');
});

Route::get('user-register', function(){
    $email = 'user@gmail.com';
    
    // firing event
    Event(new UserRegister($email));

    dd('done');
});


// en, pl - simple dynamic example
Route::get('greeting/{locale}', function($locale){

    App::setLocale($locale);

    return view('greeting');
});