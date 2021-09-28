<?php

namespace App\Services;

use App\Models\User as Model;
use App\Contract\Social;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Contracts\User;

class SocialService implements Social
{
    public function socialLogin(User $user): string
    {
        $email = $user->getEmail();
        $name = $user->getName();
        $avatar = $user->getAvatar();
        $login = $user->getNickname();

        $checkUser = Model::where('email', $email)->first();
        if (!$checkUser) {
            $checkUser = new Model();
            $checkUser->fill([
                'name' => $name,
                'email' => $email,
                'password' => Hash::make(rand(1000, 10000)),
                'login' => $login,
                'avatar' => $avatar
            ]);

            if($checkUser->save()){
                \Auth::loginUsingId($checkUser->id);
                return route('account.profile');
            }
            return route('home');
        }
        \Auth::loginUsingId($checkUser->id);
        return route('account.profile');
    }
}
