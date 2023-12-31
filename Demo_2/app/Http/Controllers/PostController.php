<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Cache;

class PostController extends Controller
{
    public function __construct()
    {
        // $this->middleware('authCheck2')->only(['create', 'show']);
        // $this->middleware('authCheck2')->except('index');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        // $posts = Post::all();


        // $posts = Post::paginate(2);

        // Facade - caching with pagination - different key cache
        $posts = Cache::remember('posts-page-'.request('page', 1), 60*3, function(){
            // we used with, to cache categories too
            return Post::with('category')->paginate(2);
        });

        // Permanent storing cache
        // $posts = Cache::rememberForever('posts', function(){
        //     // we used with, to cache categories too
        //     return Post::with('category')->paginate(2);
        // });

        return view('index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // policy  
        $this->authorize('create', Post::class);

        // gate
        // $this->authorize('create_post');

        $categories = Category::all();
        return view('create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->authorize('create_post');


        $request->validate([
            'image' => ['required', 'max:2028', 'image'],
            'title' => ['required', 'max: 255'],
            'category_id' => ['required', 'integer'],
            'description' => ['required']
        ]);


        // in theory it is ok
        $fileName = time().'_'.$request->image->getClientOriginalName();
        // returning as filepathAll
        $filePath = $request->image->storeAs('uploads', $fileName);

        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->category_id = $request->category_id;

        $post->image = 'storage/' . $filePath;

        $post->save();

        return redirect()->route('posts.store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        // $this->authorize('edit_post');
        $this->authorize('create', $post);


        $categories = Category::all();
        return view('edit', compact('post', 'categories'));
    }

    
    /**
     * 
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // $this->authorize('update_post');

        // return $request->all();
        $request->validate([
            'title' => ['required', 'max: 255'],
            'category_id' => ['required', 'integer'],
            'description' => ['required']
        ]);

        $post = Post::findOrFail($id);

        if($request->hasFile('image')){
            $request->validate([
                'image' => ['required', 'max:2028', 'image'],
            ]);
            
            // in theory it is ok
            $fileName = time().'_'.$request->image->getClientOriginalName();
            // returning as filepath
            $filePath = $request->image->storeAs('uploads', $fileName);

            // deleting our previous image
            File::delete(public_path($post->image));

            $post->image = $filePath;

        }

        $post->title = $request->title;
        $post->description = $request->description;
        $post->category_id = $request->category_id;

        $post->save();

        return redirect()->route('posts.store');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $this->authorize('delete_post');


        $post = Post::findOrFail($id);
        $post->delete();

        // should be added here logic to remove the image

        return redirect()->route('posts.index');
    }

    public function trashed()
    {
        $posts = Post::onlyTrashed()->get();
        return view('trashed', compact('posts'));
    }

    public function restore($id)
    {
        $post = Post::onlyTrashed()->findOrFail($id);
        $post->restore();

        return redirect()->back();

    }

    public function forceDelete($id)
    {
        $post = Post::onlyTrashed()->findOrFail($id);

        File::delete(public_path($post->image));

        $post->forceDelete();

        return redirect()->back();
    }
}
