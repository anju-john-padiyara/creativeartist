<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Mail;
use Email\SendMail;


class ForgotPasswordController extends Controller
{
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
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showForgotForm()
    {
        return view('admin.forgot-password');
    } 

    public function forgot(Request $request)
    {
        $user = User::where('email', $request->email)->where('admin', 1)->first();
        if ($user) {
            $data = $user;
            $data['subject'] = "Password";
            $data['template'] = "email.forgot";
            return $data;
           
            return redirect()->back()->with(['success' => 'Email not exist in database']);
        } else {
            return redirect()->back()->with(['error' => 'Reset password sent to your email address']);
        }
    }

   
}
