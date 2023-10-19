<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    //
    public function handleImage(Request $request)
    {
        // return $request->all(); // return entire request back

        // dd($request->file('image'));
        // `/` as a default storage/app/public
        $request->image->storeAs('/images', 'new_image.jpg');
    }
}