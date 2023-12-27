<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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