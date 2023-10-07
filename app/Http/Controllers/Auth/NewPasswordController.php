<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\VerificationOtp;
use Carbon\Carbon;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class NewPasswordController extends Controller
{
    /**
     * Display the password reset view.
     */
    public function create(Request $request)
    {
//        $userPassword = DB::table('password_reset_tokens')
//            ->where('email', $request->email)
//            ->first();
//        $currentDate = Carbon::now();
////        return $currentDate;
//        $expiryTime = Carbon::parse($userPassword->created_at)->addMinutes(60);
////        info($expiryTime);
//        if($currentDate <  $expiryTime) {
            return view('admin.auth.reset-password', ['request' => $request]);
//        }else{
//            return view('admin.auth.password-expiry-error');
//        }
    }

    /**
     * Handle an incoming new password request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        $request->validate([
            'otp' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
        ]);

        $user = User::where('email', $request->email)->first();
        $verificationCode  = VerificationOtp::where('user_id', $user->id)->where('otp', $request->otp)->first();
        $now = Carbon::now();
        if(!$verificationCode)
        {
            return 1;
            return redirect()->back()->with('error', 'Your OTP is not correct');
        }elseif($verificationCode && $now->isAfter($verificationCode->expire_at))
        {
            return 2;
            return redirect()->back()->with('error', 'Your OTP has been expired');
        }
        else {
            if ($user) {
                // Expire The OTP
                $verificationCode->update([
                    'expired_at' => Carbon::now()
                ]);

            }
        }


        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise we will parse the error and return the response.
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($request->password),
                    'remember_token' => Str::random(60),
                ])->save();

                event(new PasswordReset($user));
            }
        );
//        $status == Password::RESET_LINK_SENT
         return redirect()->route('login')->with('status', 'Your Password Reset Successfully');
//        return
//           redirect()->route('login')->with('status', __($status))
//            : back()->withInput($request->only('email'))
//                ->withErrors(['email' => __($status)]);

    }

    public function OtpNotification(Request $request) {
        $data = $request->all();
        $request->validate([
            'token' => ['required'],
            'email' => ['required', 'email','exists:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        // chcek the token is expired and link is valid and email is same as in the request
        $verificationCode = (new OTPController)->generateOtp($request->email);
        $message = "Your OTP To Reset Password is Send Successfully ";
//        # Return With OTP
        $data['email'] = $request->email;
        $data['name'] = 'Hello,';
        $data['key'] = 'Reset Password';
        $data['otp'] = $verificationCode->otp;
        $template['from'] = 'no-reply@milele.com';
        $template['from_name'] = 'Milele Limousine';
        $subject = 'Milele Limousine Password Reset OTP Code';
        Mail::send(
            "admin.auth.otp-email",
            ["data"=>$data] ,
            function($msg) use ($data,$template,$subject) {
                $msg->to($data['email'], $data['name'])
                    ->from($template['from'],$template['from_name'])
                    ->subject($subject);
            }
        );
        $token = Crypt::encryptString($request->token);
        $email = Crypt::encryptString($request->email);
        $password = Crypt::encryptString($request->password);

        return redirect()->route('reset-password.otp-verify', ['token' => $token, 'email'=> $email,'password'=> $password])
            ->with('success',  $message);
    }

    public function passwordResetOtpVerification($token, $email, $password)
    {
        $token= Crypt::decryptString($token);
        $email= Crypt::decryptString($email);
        $password= Crypt::decryptString($password);
        return view('admin.auth.verify-otp')->with([
            'token' => $token,
            'email' => $email,
            'password' => $password,
        ]);
    }
}
