<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function show(){
    //     return view('auth.register');
    // }


    // public function register(RegisterRequest $request)
    // {
    //     //     $user = User::create($request->validated());
    //     //     return redirect('/login')->with('sucess', 'Acount created succesfully');
    //     // }
    //     return redirect('/')->with('sucess', 'Acount created succesfully');
    // }
        

    // public function registrar(Request $request) {
    //     $userNuevo = new User;
    //     $userNuevo -> username = $request -> username;
    //     $userNuevo -> email = $request -> email;
    //     $userNuevo -> password = $request -> password;
    //     $userNuevo -> rol = 'user';
    //     $userNuevo -> save();

    //     return back() -> with('mensaje', 'Usuario agregado exitosamente');
    // }
}
