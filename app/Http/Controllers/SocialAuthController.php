<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Auth;
class SocialAuthController extends Controller
{
    public function redirectGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle()
    {
        try {
            $google_user = Socialite::driver('google')->user();

            $user = User::where('provider_id', $google_user->getId())->first();

            if (!$user) {
                $new_user = User::create([

                    'name' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'provider_id' => $google_user->getId(),
                ]);

                Auth::login($new_user);

                return redirect()->route('home');
            } else {
                Auth::login($user);
                return redirect()->route('home');
            }
        } 
        catch (\Throwable $th) {
            return redirect()->route('inloggen');
        };
    }


    public function redirectFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function callbackFacebook()
    {

        try {
            $facebook_user = Socialite::driver('facebook')->user();

            $user = User::where('provider_id', $facebook_user->getId())->first();

            if (!$user) {
                $new_user = User::create([

                    'name' => $facebook_user->getName(),
                    'email' => $facebook_user->getEmail(),
                    'provider_id' => $facebook_user->getId(),
                ]);

                Auth::login($new_user);

                return redirect()->route('home');
            } else {
                Auth::login($user);
                return redirect()->route('home');
            }
        } catch (\Throwable $th) {
            return redirect()->route('inloggen');
        }
    }

}

