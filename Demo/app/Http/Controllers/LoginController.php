<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function handleLogin(Request $request){
        // echo $_POST['name'];
        // echo $_POST['password'];
        // echo $_POST['email'];

        // dd($request->all());

        $request->validate([
            'name' => 'required|alpha|min:6|max:10',
            'email' => ["required", 'email', ],
            'password' => 'required'
        ]);

        return $request;
    }

}
