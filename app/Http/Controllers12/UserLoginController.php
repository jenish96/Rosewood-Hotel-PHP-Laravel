<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Users;


class UserLoginController extends Controller
{
    //
    public function login()
    {
        return view("user.login.login");
    }

    public function checklogin(Request $request)
    {
        $email = $request->useremail;
        $password = $request->password;

        $result = Users::select("*")->where("email",$email)->where("password",$password)->get();
        $num = count($result);

        if($num <= 0)
        {
            return redirect('/user/login')->with("message","Username or password is invalid");
        }
        else{
            Session::put("isUserLogin","yes");
            foreach($result as $row)
            {
                Session::put('user_id',$row->user_id);
                Session::put('username',$row->username);
                Session::put('contactNo',$row->contact_no);
                Session::put('email',$row->email);
            }
            return redirect('/user/home');
        }
    }

    public function register(Request $request){
        $uname = $request ->uname;
        $email =$request ->email;
        $cno =$request ->cotactNo;
        $password =$request ->pwd;
        $otp =rand(1111,9999);
        $verify ="no";

        $result = Users::where("email", $email)->get();
        if (count($result) <= 0) {
        $obj = new Users;
        $obj -> username = $uname;
        $obj -> email = $email;
        $obj -> contact_no = $cno;
        $obj -> password = $password;
        $obj -> otp = $otp;
        $obj -> is_verify = $verify;
        $obj ->save();

        Session::put("cuserid",$obj->user_id);
        Session::put("cotp",$otp);
        $details=[
            "otp"=>$otp
        ];
        \Mail::to($email)->send(new \App\Mail\UesrOtpMail($details));
        

        return redirect('/user/otpVerify')->with("message", "You Register successfully");
        }
        else{
            return redirect("/user/login")->with("message", "Email is already Exist");
        }
    }

    public function otpVerify()
    {
        return view("user.login.otpVerify");
    }

    public function checkotp(Request $request)
    {
        if(Session::get("cotp")==$request->otp)
        {
            $obj=Users::where("user_id", Session::get("cuserid"))->first();
            $obj->is_verify	="yes";
            $obj->save();
            return redirect('/user/login');
        }
        else
        {
            return redirect('/user/otpVerify')->with("message", "OTP not match");
        }
    }

    public function forgotPwd()
    {
        return view("user.login.forgotPwd");
    }

    public function checkMail(Request $request)
    {
        $email =$request->email;
        $forgototp =rand(1111,9999);

        $result = Users::where("email", $email)->get();
        if (count($result) <= 0) {

            
            return redirect('/user/forgotPwd')->with("message", "Please Enter Register Email");
        }
        else{
            Session::put('fotp',$forgototp);
            Session::put('email',$email);
            $details=[
                "otp"=>$forgototp
            ];
            \Mail::to($email)->send(new \App\Mail\UesrOtpMail($details));

            return redirect('/user/forgotOtp');

        }
    }

    public function forgotOtp()
    {
        return view("user.login.forgotVerify");
    }

    public function ForgotOTPVerify(Request $request)
    {
        if(Session::get("fotp")==$request->otp)
        {
            return redirect('/user/newPassword');
        }
        else
        {
            return redirect('/user/otpVerify')->with("message", "OTP not match");
        }
    }

    public function newPassword()
    {
        return view('user.login.newPassword');
    }

    public function updatePassword(Request $request)
    {
        $newPwd =$request->pwd;
        
        
            $obj =Users::where("email",Session::get('email'))->first();
            $obj->password=$newPwd;
            $obj->save();

            return redirect('/user/login')->with("message","Password Was Updated");
            
        
    }

    public function userlogout()
    {
        Session::flush();
        return redirect('/user/login');
    }

    public function error()
    {
        return view('user.login.error');
    }
}
