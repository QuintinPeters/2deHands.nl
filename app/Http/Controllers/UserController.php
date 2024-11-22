<?php

namespace App\Http\Controllers;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Auth;
use Request;
class UserController extends Controller
{
    public function login(LoginRequest $request)
    {
        $validated = $request->validated();
        if (!Auth::attempt(['email' => $validated['email'], 'password' => $validated['password'], 'provider_id' => null])) {
            return redirect()->back()->withErrors([
                "error" => "The provided credentials do not match our records."
            ]);
        }

        return redirect()->intended();
    }


    public function register(RegisterRequest $request)
    {
        $validated = $request->validated();

        $user = User::create($validated);
        Auth::login($user);

        return redirect()->route('home');
    }


    public function update(ProfileUpdateRequest $request)
    {
        $request->validated();

        $user = auth()->user();
        $user->name = $request->name;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->city = $request->city;
        $user->street_name = $request->street_name;
        $user->house_number = $request->house_number;
        $user->postal_code = $request->postal_code;

        $user->save();

        return redirect()->route('accountinfo')->with('success', 'Profile updated successfully.');

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
    public function destroy(Request $request)
    {
        $user = auth()->user();
        Auth::logout();
        $user->delete();

        return redirect()->route('home')->with('success', 'Account deleted successfully.');
    }

}
