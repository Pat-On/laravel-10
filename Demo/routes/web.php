<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\PostController;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostControllerWithMiddleware;
use App\Models\Post;
use Illuminate\Http\Request;



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

Route::get('/download',[ImageController::class, 'download'])->name('download');

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


// Section 16

// new feature :>
Route::get('/posts/trash', [PostController::class, 'trashed'])->name('posts.trashed');

Route::get('/posts/{id}/restore', [PostController::class, 'restore'])->name('posts.restore');

Route::delete('/posts/{id}/force-delete', [PostController::class, 'forceDelete'])->name('posts.force_delete');

Route::resource('posts', PostController::class);


Route::get('/unavailable', function(){
    return view('unavailable');
})->name('unavailable');


// Route Groups
// Route::group([], callback)


// http://localhost:8000/profil?auth=1

Route::group(['middleware' => 'authCheck'], function(){
    Route::get('/dashboard', function(){
        return view('dashboard');
    });
    
    Route::get('/profile', function(){
        return view('profile');
    });
});

Route::get('/profile2', function(){
    return view('profile');
})->middleware('authCheck2');

// in this context it works very similar to groups
// the main difference in group middleware you can pass many different middlewares
// here you can pass only single middleware
Route::group(['middleware' => 'authCheck2'], function(){
    Route::get('/dashboard3', function(){
        return view('dashboard');
    });
    
    Route::get('/profile3', function(){
        return view('profile');
    });
});

// Middleware in the controller
Route::resource('posts2', PostControllerWithMiddleware::class);


// Components 

Route::get('contact', function(){
    $posts = Post::all();

    return view('contact', compact('posts'));
});


// Sending email
Route::get('send-email', function(){
    // Laravel mail Facade
    // Mail::raw('Hello World - test email', function($message){
    //     // another callback :>
    //     $message->to('test@gmail.com')->subject('noreply');
    // });

    Mail::send(new OrderShipped);

    dd('success');
});


// Sessions 
Route::get('get-session', function(Request $request){
    
    
    // managing sessions
    // 1 request
    $data = $request->session()->all();
    
    // 2 global function
    // $data = session()->all();

    // Single session
    // $data = $request->session()->get('_token'); // session token

    dd($data);
});

Route::get('save-session', function(Request $request){
    // $request->session()->put('user_id', '1234_fake_id');

    $request->session()->put(['user_status' => 'logged_in']);

    // Global functin
    session(['different_example' => 'this is working']);

    return redirect('get-session');
});