<?php

namespace App\Http\Controllers;
use App\Http\Requests\AuthRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Validation\Rule;
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

        // Attempt to authenticate the user with the given credentials and provider_id as null
        if (!Auth::attempt(['email' => $validated['email'], 'password' => $validated['password'], 'provider_id' => null])) {
            return redirect()->back()->withErrors([
                "error" => "The provided credentials do not match our records."
            ]);
        }
        
        return redirect()->route('home');
    }

    
    public function register(RegisterRequest $request)
    {
        $validated = $request->validated();

        $user = User::create($validated);
        Auth::login($user);

        return redirect()->route('home');
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
