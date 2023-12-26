<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;


class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function handleLogin(LoginRequest $request){
        // echo $_POST['name'];
        // echo $_POST['password'];
        // echo $_POST['email'];

        // dd($request->all());

        // $request->validate([
        //     'name' => 'required|alpha|min:6|max:10',
        //     'email' => ["required", 'email', ],
        //     'password' => 'required'
        // ], [
        //     // rule customization error info
        //     'name.required' => 'bla bla bla name',
        //     'name.alpha' => "only letters"
        // ]);

        return $request;
    }

}
