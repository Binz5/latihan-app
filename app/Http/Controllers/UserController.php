<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'nim' => 'required|string',
        ]);

        $data = $request->all();
        session()->put('user', $data);

        return redirect('/profile');
    }

    public function showRegister()
    {
        return view('register');
    }

    public function register(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'nim' => 'required|string',
        ]);

        $data = $request->all();
        session()->put('user', $data);

        return redirect('/login')->with('success', 'Registration Successful!');
    }

    public function profile()
    {

        $user = session()->get('user');

        if (!$user || !isset($user['name'])) {
            return redirect('/login')->with('error', 'You must login first');
        }

        return view('profile', ['user' => $user]);
    }

    public function logout()
    {
        session()->forget('user');
        return redirect('/login')->with('success', 'You have logged out');
    }
}
