<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;


class UserController extends Controller
{
    public function registrationForm(){
        return view('register');
    }

    public function loginForm(){
        return view('login');
    }
    
    public function register(Request $request){
        $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
            'email' => 'required|email'
        ]);

        $token = Str::random(24);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => $token
        ]);


        return redirect('/login')->with('Message', 'Your account has been created, You may now login');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'email|required',
            'password' => 'string|required',
        ]);


        $login = auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        if(!$login) {
            return back()->with('Error', 'Invalid credentials');
        };

        return redirect('/dashboard');
    }

    public function logout(Request $request){
        auth()->logout();
        return redirect('/login')->with('Message', 'Successfully Logout');
    }
}
