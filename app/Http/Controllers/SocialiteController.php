<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;


class SocialiteController extends Controller
{
    // Redirect ke provider
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    // Callback dari provider
    public function callback($provider)
    {
        try {
            $socialUser = Socialite::driver($provider)->user();
        } catch (\Exception $e) {
            return redirect('/login')->with('error', 'Login gagal!');
        }

        // Simpan atau update user di database
        $user = User::firstOrCreate(
            ['email' => $socialUser->getEmail()],
            [
                'name' => $socialUser->getName(),
                'password' => bcrypt(Str::random(16)), // password random
            ]
        );

        // Login user
        Auth::login($user, true);

        return redirect('/dashboard');
    }

    
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();
        // login/register user
    }
}
