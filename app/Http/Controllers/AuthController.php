<?php

namespace App\Http\Controllers;

use App\Helpers\CMail;
use App\Models\User;
use App\UserStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function loginForm(Request $request)
    {
        $data = [
            'title' => 'Admin Login',
        ];
        return view('backend.pages.auth.login', $data);
    }

    public function loginHandler(Request $request)
    {
        $fieldType = filter_var($request->login_id, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        if ($fieldType == 'email') {
            $request->validate([
                'login_id' => 'required|email|exists:users,email',
                'password' => 'required|min:5',
            ], [
                'login_id.required' => 'Enter your Email or Username',
                'login_id.email' => 'Invalid email address',
                'login_id.exists' => 'No account found with this email',
            ]);
        } else {
            $request->validate([
                'login_id' => 'required|exists:users,username',
                'password' => 'required|min:5',
            ], [
                'login_id.required' => 'Enter your Email or Username',
                'login_id.exists' => 'No account found with this username',
            ]);
        }

        $credentials = array(
            $fieldType => $request->login_id,
            'password' => $request->password,
        );

        if (Auth::attempt($credentials)) {
            //check if account is inactive mode
            if (Auth::user()->status == UserStatus::Inactive) {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return redirect()->route('admin.login')->with('fail', 'Your account is currently inactive. Please, contact support at (admin@email.test) for further assistance.');
            }

            //check if user is pending mode
            if (Auth::user()->status == UserStatus::Pending) {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return redirect()->route('admin.login')->with('fail', 'Your account is currently pending approval. Please, check your email for further instructions or contact support at (admin@email.test) assistance.');
            }

            //Redirect use to dashboard
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('admin.login')->withInput()->with('fail', 'Incorrect password.');
        }
    }

    public function forgotForm(Request $request)
    {
        $data = [
            'title' => 'Forgot Password',
        ];
        return view('backend.pages.auth.forgot-password', $data);
    }

    public function sendPassWordResetLink(Request $request)
    {
        // Validate the form data
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ], [
            'email.required' => 'The :attribute is required',
            'email.email' => 'Invalid email address',
            'email.exists' => 'We cant not find a user with this email address',
        ]);

        //get user details
        $user = User::where('email', $request->email)->first();

        //generate token
        $token = base64_encode(Str::random(64));

        //check if there is an existing token
        $oldToken = DB::table('password_reset_tokens')->where('email', $user->email)->first();
        if ($oldToken) {
            //update token
            DB::table('password_reset_tokens')->where('email', $user->email)->update([
                'token' => $token,
                'created_at' => Carbon::now(),
            ]);
        } else {
            //add new reset password token
            DB::table('password_reset_tokens')->insert([
                'email' => $user->email,
                'token' => $token,
                'created_at' => Carbon::now(),
            ]);
        }

        //create clickable action link
        $actionlink = route('admin.reset_password_form', ['token' => $token]);

        $data = array(
            'actionlink' => $actionlink,
            'user' => $user,
        );

        $mail_body = view('email-templates.forgot-template', $data)->render();

        $mailConfig = array(
            'recipient_address' => $user->email,
            'recipient_name' => $user->name,
            'subject' => 'Reset Password',
            'body' => $mail_body,
        );

        if (CMail::send($mailConfig)) {
            return redirect()->route('admin.forgot')->with('success', 'We have e-mailed your password reset link!');
        } else {
            return redirect()->route('admin.forgot')->with('fail', 'Something went wrong. Resetting password link not sent. Try again later.');
        }
    }

    public function resetForm(Request $request, $token = null)
    {
        //check if this token is exist
        $isTokenExist = DB::table('password_reset_tokens')->where('token', $token)->first();
        if (!$isTokenExist) {
            return redirect()->route('admin.forgot')->with('fail', 'Invalid token. Request another reset password link.');
        } else {
            //check if this token is expired
            $diffMins = Carbon::createFromFormat('Y-m-d H:i:s', $isTokenExist->created_at)->diffInMinutes(Carbon::now());

            if ($diffMins > 15) {
                //When token is older than 15 minutes
                return redirect()->route('admin.forgot')->with('fail', 'The password reset link you clicked has expired. Please request a new link.');
            }
            $data = [
                'title' => 'Reset Password',
                'token' => $token,
            ];
            return view('backend.pages.auth.reset-password', $data);
        }
    }

    public function resetPasswordHandler(Request $request)
    {
        // Validate the form data
        $request->validate([
            'new_password' => 'required|min:5|required_with:new_password_confirmation|same:new_password_confirmation',
            'new_password_confirmation' => 'required',
        ]);

        $dbToken = DB::table('password_reset_tokens')->where('token', $request->token)->first();

        //get user details
        $user = User::where('email', $dbToken->email)->first();

        //update user password
        User::where('email', $user->email)->update([
            'password' => Hash::make($request->new_password),
        ]);

        //send email notification to this user email address that contains the new password
        $data = array(
            'user' => $user,
            'new_password' => $request->new_password,
        );

        $mail_body = view('email-templates.password-changes-template', $data)->render();

        $mailConfig = array(
            'recipient_address' => $user->email,
            'recipient_name' => $user->name,
            'subject' => 'Password Changed',
            'body' => $mail_body,
        );

        if (CMail::send($mailConfig)) {
            //delete the token
            DB::table('password_reset_tokens')->where([
                'email' => $user->email,
                'token' => $request->token,
            ])->delete();

            return redirect()->route('admin.login')->with('success', 'Done!, Your password has been changed successfully. Use your new password for login into system.');
        } else {
            return redirect()->route('admin.reset_password_form', ['token' => $dbToken->token])->with('fail', 'Something went wrong. Try again later.');
        }
    }
}
