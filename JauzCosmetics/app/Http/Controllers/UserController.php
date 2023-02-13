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
        

/*      public function registrar(Request $request) {
        $request->validate([
            'username' => 'required|min:6',
            'email' => 'required|email',
            'password' => 'required|min:8|password',
            'rol' => 'required'
        ]); 
        
        $errors = $request->has('errors');

        if (!$errors) {
            $newUser = new User;
            $newUser = new User;
            $newUser -> username = $request -> username;
            $newUser -> email = $request -> email;
            $newUser -> password = $request -> password;
            $newUser -> rol = 'user';
            $newUser -> save();

            return back() -> with('mensaje', 'Usuario agregado exitosamente');

        } else {
            $errors = $request->errors();
            return back()->with('errors', $errors);
        }

     } */
}