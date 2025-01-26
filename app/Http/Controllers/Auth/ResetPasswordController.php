<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    protected function resetPassword($user, $password)
    {
        $user->password = Hash::make($password);

        if (is_null($user->email_verified_at)){
            $user->sendEmailVerificationNotification();
        }

        $user->save();

        event(new PasswordReset($user));
    
        $this->guard()->login($user);
    }

    protected function sendResetResponse(Request $request, $response)
    {
        if(is_null(auth()->user()->email_verified_at)){
            return redirect()->route('verification.notice')->with('status', 'Password reset successfully. Please verify your email to access your account.');
        }

        return redirect($this->redirectPath())->with('status', trans($response));
    }
}
