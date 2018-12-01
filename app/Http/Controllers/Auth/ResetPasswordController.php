<?php

namespace App\Http\Controllers\Auth;

use App\Models\Auth\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Notifications\Auth\SendActivationCode;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function sendText(Request $request)
    {
        $phone = $request->phone;
        $this->validate($request, [
            'email' => 'required|exists:users'
        ], [
            'exists' => 'This :attribute is not registered in our system'
        ]);
        $User = User::whereEmail($request->email)->first();
        $User->temp_pass = bcrypt($code = str_random(12));
        $User->notify( new SendActivationCode($code) );
        return back()->withStatus('Temporary password was sent to '.$phone);
    }
}
