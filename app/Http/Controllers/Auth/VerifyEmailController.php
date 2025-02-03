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


    public function verify(EmailVerificationRequest $request)
{

    $request->fulfill();
    return redirect('/home')->with('status', 'Your email has been verified!');

}
}
