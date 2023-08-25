<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use App\Models\Users;
use App\Models\Hotel;
use App\Models\Booking;
use App\Models\Review;
use App\Models\Room;
use Illuminate\Support\Facades\Session;

class AuthenticationController extends Controller
{
    public function dashboard()
    {
        $bookingData = Booking::select("*")->leftjoin("tbl_user","tbl_booking.user_id","=","tbl_user.user_id")->take(7)->get();
        $reviewData =Review::select("*")->leftjoin("tbl_user","tbl_review.user_id","=","tbl_user.user_id")->take(7)->get();
        $userData =Users::all();
        $user = Users::all();
        $total_user = count($user);
        $hotel = Hotel::all();
        $total_hotel =count($hotel);
        $booking = Booking::all();
        $total_booking = count($booking);
        $room = Room::all();
        $total_room = count($room);
        $hotelData = Hotel::select("*")->leftjoin("tbl_city", "tbl_hotel.city_id", "=", "tbl_city.city_id")
            ->leftjoin("tbl_place", "tbl_hotel.place_id", "=", "tbl_place.place_id")
            ->leftjoin("tbl_hotel_type", "tbl_hotel.hotel_type_id", "=", "tbl_hotel_type.hotel_type_id")->get();

        return view('admin.authentication.dashboard' ,compact('total_user','userData','reviewData','total_hotel','total_booking','hotelData','total_room','bookingData'));
    
    }

    //start Profile

    public function myProfile()
    {
        $adminData =Login::select("*")->first();
        return view("admin.authentication.myProfile",compact('adminData'));
    }

    public function editProfile()
    {
        $id =Session::get('login_id');

        $adminData =Login::Select("*")->where("login_id",$id)->first();
        return view('admin.authentication.editProfile',compact('adminData'));
    }

    public function updateProfile(Request $request)
    {
        $login_id =Session::get('login_id');
        $name =$request->txtName;
        $uname =$request->txtUsername;
        $email =$request->txtemail;
        $phone =$request->txtphone;

        $obj = Login::where("login_id",$login_id)->first();
        $obj ->username = $uname;
        $obj ->name =$name;
        $obj ->contact_no =$phone;
        $obj ->email =$email;
        $obj->save();

        return redirect('/admin/myProfile')->with("message","Profile Updated Sucessfully!");

    }
    //End profile 

    public function login()
    {
        return view('admin.authentication.login');
    }

    public function checklogin(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        $result = Login::select("*")->where("username",$username)->where("password",$password)->get();
        $num = count($result);

        if($num <= 0)
        {
            return redirect('/')->with("message","Username or password is invalid");
        }
        else{
            Session::put("isAdminLogin","yes");
            foreach($result as $row)
            {
                Session::put('login_id',$row->login_id);
                Session::put('name',$row->name);
                Session::put('email',$row->email);
            }
            return redirect('/admin/dashboard');
        }
    }

    public function changepwd()
    {
        return view('admin.authentication.changepwd');
    }

    public function updatepwd(Request $request)
    {
        $oldpwd =$request->oldpwd;
        $newpwd =$request->newpwd;

        $id =Session::get("login_id");

        $result = Login::where("login_id",$id)->where("password",$oldpwd)->get();
        if(count($result) <= 0)
        {
            return redirect('/admin/changepwd')->with("danger","Password does not Match");
        }
        else{
            $obj =Login::where('login_id',$id)->where("password",$oldpwd)->first();
            $obj ->password =$newpwd;
            $obj->save();
            return redirect('/admin/changepwd')->with("message","Password updated Sucessfully");
        }
    }

    // public function isPay($id,$status)
    // {
    //     $obj=Hotel::where("booking_id",$id)->first();
    //     $obj->is_approve = $status;
    //     $obj->save();
    //     return redirect('/admin/viewHotel');
    // }

    public function logout()
    {
        Session::flush();
        return redirect('/');
    }

    public function forgotPwd()
    {
        return view("admin.authentication.forgetPwd");
    }

    public function checkEmail(Request $request)
    {
        $email =$request->email;

        $result = Login::select("*")->where("email",$email)->get();
        $num = count($result);

        if($num <= 0)
        {
            return redirect('/forgotPwd')->with("danger","Email is Not Found");
        }
        else{
            // email

            foreach ($result as $row) {
                $password = $row ->password;
                $details=[
                     "password" => $password
                ];
                \Mail::to($email)->send(new \App\Mail\ForgotPasswordMail($details));
            }

            return redirect('/')->with("message","Email Send Sucessfuly! Please check Your Email");
        }
    }
}
