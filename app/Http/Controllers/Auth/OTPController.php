<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\LoginOtp;
use App\Models\User;
use App\Models\UserDeviceDetail;
use App\Models\VerificationOtp;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Jenssegers\Agent\Facades\Agent;

class OTPController extends Controller
{
    public function loginOtpGenerate(Request $request)
    {
        $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required',
        ]);

        $user = User::where('email',$request->email)->first();
        if($user && Hash::check($request->password, $user->password))
        {
            // calculate verification expiry date time
            $userCurrentBrowser = Agent::browser();
            $userLastOtpVerified = VerificationOtp::where('user_id', $user->id)
                ->orderBy('id','DESC')->first();
            // check opt table has entry
            if($userLastOtpVerified) {
                $latestLoginActivity = UserDeviceDetail::where('user_id', $user->id)->orderBy('id','DESC')->first();
                // check the mac address change to check whether the device is changed or not
                if($latestLoginActivity) {
//                        if($latestLoginActivity->mac_address == $userMacAdress ) {
                    // check the platform same or not
                    if(Agent::isPhone() == 'phone') {
                        $userDevice = 'phone';
                    }elseif (Agent::isTablet() == 'tablet') {
                        $userDevice = 'tablet';
                    }elseif (Agent::isDesktop() == 'desktop') {
                        $userDevice = 'desktop';
                    }
                    if($latestLoginActivity->device == $userDevice) {
                        if($latestLoginActivity->browser == $userCurrentBrowser) {
                            $userLastOtpVerifiedDate = Carbon::parse($userLastOtpVerified->created_at)->addDays(30);

                            $currentDate = Carbon::now();
                            if($currentDate->isBefore($userLastOtpVerifiedDate)) {
                                $request['user_id'] = $user->id;
                                return(app('App\Http\Controllers\Auth\AuthenticatedSessionController')->store($request));
                            }
                        }
                    }
//                        }
                }

            }

            # Generate An OTP
            $verificationCode = $this->generateOtp($request->email);

            $message = "Your OTP To Login is Send Successfully ";
            # Return With OTP
            $data['email'] = $request->email;
            $data['name'] = 'Hello,';
            $data['key'] = 'Login';
            $data['otp'] = $verificationCode->otp;
            $template['from'] = 'no-reply@milele.com';
            $template['from_name'] = 'Milele Limousine';
            $subject = 'Milele Limousine Login OTP Code';
            try {
                Mail::send(
                    "admin.auth.otp-email",
                    ["data" => $data],
                    function ($msg) use ($data, $template, $subject) {
                        $msg->to($data['email'], $data['name'])
                            ->from($template['from'], $template['from_name'])
                            ->subject($subject);
                    }
                );
            }catch(Exception $e){
                return response($e->getMessage(), 422);
            }
            $user_id = Crypt::encryptString($verificationCode->user_id);
            $email = Crypt::encryptString($request->email);
            $password = Crypt::encryptString($request->password);
            return redirect()->route('otp.verification', ['user_id' => $user_id, 'email'=>$email,'password'=>$password])->with('success',  $message);

        }
        else
        {
            Session::flash('error','These credentials do not match our records.');
            return view('admin.auth.login');
        }
    }
    public function generateOtp($email)
    {
        $user = User::where('email', $email)->first();
        # User Does not Have Any Existing OTP
        $verificationCode = VerificationOtp::where('user_id', $user->id)->latest()->first();
        $now = Carbon::now();
        if($verificationCode && $now->isBefore($verificationCode->expired_at)){
            return $verificationCode;
        }
        // Create a New OTP
        $otp = new VerificationOtp();
        $otp->user_id = $user->id;
        $otp->otp = rand(123456, 999999);
        $otp->expired_at = Carbon::now()->addMinutes(10);
        $otp->save();
        return $otp;

    }
    public function verification($user_id, $email, $password)
    {
        $user_id= Crypt::decryptString($user_id);
        $email= Crypt::decryptString($email);
        $password= Crypt::decryptString($password);
        return view('admin.auth.otp-verification')->with([
            'user_id' => $user_id,
            'email' => $email,
            'password' => $password,
        ]);
    }
}
