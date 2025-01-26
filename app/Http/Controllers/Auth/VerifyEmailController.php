<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

use Illuminate\Auth\Events\Verified; // For the Verified event
use Illuminate\Support\Facades\Log; // For logging

class VerifyEmailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

       /**
     * Handle email verification redirection.
     *
     * @param  \Illuminate\Foundation\Auth\EmailVerificationRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function verified(EmailVerificationRequest $request)
    {
        // Redirect to the desired URL
        return redirect('/')->with('verified', true);
    }


    public function verify(Request $request)
{
    $user = $request->user();
    if ($user->hasVerifiedEmail()) {
        return response('Email already verified.');
    }

    $user->markEmailAsVerified(); // This should update `email_verified_at`

    // Log for debugging
    Log::info('User verified: ' . $user->email);

    event(new Verified($user));

    return redirect('/')->with('verified', true);
}
}
