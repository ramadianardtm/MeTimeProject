<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:5|max:20|unique:users',
            'email' => 'required|email:dns',
            'password' => 'required|min:6|max:10',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        user::create($validatedData);

        // $request->session()->flash('success', 'Registration Successful, Please Login!');

        return redirect('/login')->with('success', 'Registration Successful, Please Login!')->with('title','Login');
    
    }
}