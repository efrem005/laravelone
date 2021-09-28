<?php

namespace App\Http\Controllers\Auth;

use App\Contract\Social;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function redirectToVkontakte()
    {
        return Socialite::driver('vkontakte')->redirect();
    }

    public function handlerVkontakteCallback(Social $service)
    {
        try {
            return redirect($service->socialLogin(
                Socialite::driver('vkontakte')->user()
            ));
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
        }
    }

    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handlerFacebookCallback(Social $service)
    {
        try {
            return redirect($service->socialLogin(
                Socialite::driver('facebook')->user()
            ));
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
        }
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handlerGoogleCallback(Social $service)
    {
        try {
            return redirect($service->socialLogin(
                Socialite::driver('google')->user()
            ));
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
        }
    }

    public function redirectToGithub()
    {
        return Socialite::driver('github')->redirect();
    }

    public function handlerGithubCallback(Social $service)
    {
        try {
            return redirect($service->socialLogin(
                Socialite::driver('github')->user()
            ));
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
        }
    }
}
