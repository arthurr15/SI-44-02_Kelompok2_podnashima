<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{
    //

    public function register()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }

    /**
     * Register User
     * 
     * @param Request $request
     * @return response
     */
    public function registerUser(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',
        ]);

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        auth()->attempt($data);

        return redirect('/')->with('success', 'Register Success');
    }

    /**
     * Login User
     * 
     * @param Request $request
     * @return response
     */
    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);


        // login user with email and password
        $credentials = request(['email', 'password']);
        if (!auth()->attempt($credentials))
            return redirect()->route('login')->withErrors('user tidak ditemukan / password salah');

        return redirect('/');
    }

    /**
     * Logout User
     * 
     */
    public function logoutUser()
    {
        Session::flush();
        auth()->logout();

        return redirect('/')->with('success', 'Logout Success');
    }
}