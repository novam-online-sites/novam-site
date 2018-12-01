<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class OAuthController extends Controller
{
    //

    public function doCallback($driver)
    {
        $User = Socialite::driver($driver)->user();
    }

    public function redirectTo($driver)
    {
        return Socialite::driver($driver)->redirect();
    }
}
