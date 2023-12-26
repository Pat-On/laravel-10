<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    //
    public function handleImage(Request $request)
    {


        // $request->validate([
        //     'image' => ['required', 'max:500'] //500KB
        // ]);



        // return $request->all(); // return entire request back

        // dd($request->file('image'));
        // `/` as a default storage/app/public
        $request->image->storeAs('/images', 'new_image.jpg');

        return redirect()->route('success'); //->back(); or redirect('/success');
    }



    public function download()
    {
        return response()->download(public_path('/images/new_image.jpg'));
    }
}