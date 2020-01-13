<?php

namespace  App\Http\Controllers\admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\notifications\AdminResetPasswordNotication;
use Illuminate\Notifications\Notifiable;

class ForgotPasswordController extends Authenticatable
{
    use Notifiable;
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;



    /**
     * Display the form to request a password reset link.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLinkRequestForm()
    {
        return view('admin.passwords.email');
    }

    public function broker()
    {
        return Password::broker('admins');
    }
}
