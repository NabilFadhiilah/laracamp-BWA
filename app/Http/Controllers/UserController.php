<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Auth;

class UserController extends Controller
{
    //
    public function login()
    {
        # code...
        return view('auth.user.login');
    }

    public function google()
    {
        # code...
        // return 'google redirect';
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {
        # code...
        // return 'provider callback';
        $callback = Socialite::driver('google')->stateless()->user();
        $data = [
            'name' => $callback->getName(),
            'email' => $callback->getEmail(),
            'avatar' => $callback->getAvatar(),
            'email_verfied_at' => date('Y-m-d H:i:s', time()),
        ];
        $user = User::firstOrCreate(['email' => $data['email']], $data);
        Auth::login($user, true);
        return redirect(route('welcome'));
    }
}
