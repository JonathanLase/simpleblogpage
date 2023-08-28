<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:4|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
        ]);

        // $validated['password'] = bcrypt($validated['password']);
        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        // $request->session()->flash('success', 'Registration successfull! Please Login');

        return redirect('/login')->with('success', 'Registration successfull! Please Login');
    }
}
