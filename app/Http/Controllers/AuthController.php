<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function login() {
        return view('login');
    }

    public function register() {
        return view('register');
    }

    public function createUser(RegisterRequest $request)
    {
        $validated = $request->validated();
        $remember = !!$request->input('remember');

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        Auth::login($user, $remember);
        //event(new Registered($user));

        return redirect()->route('book.index');
    }


    public function authenticate(AuthRequest $request)
    {
        $validated = $request->validated();
        $remember = !!$request->input('remember');

        if (Auth::attempt($validated, $remember)) {
            $request->session()->regenerate();

            return redirect()->route('book.index');
        }

        return back()->withErrors([
            'email' => 'Incorrect email or password',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('book.index');
    }
}
