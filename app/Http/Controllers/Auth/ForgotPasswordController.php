<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;

class ForgotPasswordController extends Controller
{
    /**
     * Display the form to request a password reset link.
     *
     * @return \Illuminate\View\View
     */
    public function showLinkRequestForm()
    {
        $email = null;
        if(request()->email){
            $email = request()->email;
        }
        return view('auth.forgot-password',compact('email'));
    }

    /**
     * Send a reset link to the given user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        Log::info('Password reset web request initiated', ['email' => $request->email]);

        try {
            $status = Password::sendResetLink(
                $request->only('email')
            );

            Log::info('Password reset web link status result', [
                'email' => $request->email,
                'status' => $status,
            ]);

            if ($status === Password::RESET_LINK_SENT) {
                return back()->with(['status' => __($status)]);
            }

            throw ValidationException::withMessages([
                'email' => [trans($status)],
            ]);
        } catch (ValidationException $e) {
            throw $e;
        } catch (\Throwable $e) {
            Log::error('Error sending password reset email (web): ' . $e->getMessage(), [
                'email' => $request->email,
                'exception' => $e,
            ]);

            return back()->withErrors(['email' => 'Mail error: ' . $e->getMessage()]);
        }
    }

    // ForgotPasswordController.php
    public function sendResetLinkApi(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        Log::info('Password reset API request initiated', ['email' => $request->email]);

        try {
            $status = Password::sendResetLink($request->only('email'));

            Log::info('Password reset API link status result', [
                'email' => $request->email,
                'status' => $status,
            ]);

            return $status === Password::RESET_LINK_SENT
                ? response()->json(['message' => 'Reset link sent to your email.'], 200)
                : response()->json(['error' => __($status)], 400);
        } catch (\Throwable $e) {
            Log::error('Error sending password reset email (API): ' . $e->getMessage(), [
                'email' => $request->email,
                'exception' => $e,
            ]);

            return response()->json([
                'error' => 'Mail error: ' . $e->getMessage(),
            ], 500);
        }
    }
}
