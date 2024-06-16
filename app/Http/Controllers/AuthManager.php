<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class AuthManager extends Controller
{
    function login() {
        if(Auth::check()){
            return redirect(route('welcome'));
        }
        return view('login');
    }

    function register() {
        if(Auth::check()){
            return redirect(route('home'));
        }
        return view('register');
    }

    function loginPost(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request-> only('email', 'password');
        if(Auth::attempt($credentials)) {
            return redirect()->intended(route('home'));
        }
  
        return redirect()->intended(route('login'))->with("error", "Login details are invalid" );
    }

    function registerPost (Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);
        
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password); 
        $user = User::create($data); 
        if(!$user) {
            return redirect()->intended(route('register'))->with("error", "Failed to create user");
        }
        return redirect()->intended(route('login'))->with("success", "User created successfully"); 
    }

    function logout() {
        Session::flush();
        Auth::logout();
        return redirect()->intended(route('login'));
    }
}
