<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
class UserController extends Controller
{
    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!Auth::attempt($validated)) {
            return redirect()->back()->withErrors([
                'login' => 'Login information invalid.',
            ]);
        }

        $user = User::where('email', $validated['email'])->first();

        Auth::login($user);

        return redirect()->route('account');
    }
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|confirmed|min:7',
        ]);
    
        $user = User::create($validated);
        Auth::login($user);

        return redirect()->route('account');
    }

}
