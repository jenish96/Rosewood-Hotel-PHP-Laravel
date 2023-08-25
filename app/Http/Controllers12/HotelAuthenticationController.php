<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Hotel;
use App\Models\Room;
use Illuminate\Support\Facades\DB;


class HotelAuthenticationController extends Controller
{
    //
    public function hotelDashboard()
    {
        $id = Session::get('hotel_id');
        $bookingData = DB::select("select * from tbl_booking as b left join tbl_user as u on u.user_id=b.user_id where b.booking_id in (select booking_id from tbl_book_room where room_id in (select room_id from tbl_room where hotel_id='$id'))");
        $hotelData =Hotel::select("*")->where("hotel_id",$id)->get();

        $room = Room::select("*")->where("hotel_id",$id)->get();
        $total_room=count($room);
        $total_booking =count($bookingData);


        // chart
        $data = array();
        $month = strtotime('2021-09-01');
        $current = date('Y-m-d');
        $end = strtotime($current);
        while ($month < $end) {
            $count = 0;
            $mn = date('Ym', $month); //202109
            $result = DB::select("select * from tbl_booking where DATE_FORMAT(booking_date,'%Y%m')='$mn'"); //202109
            $count = count($result);

            array_push($data, array("month" => date('F Y', $month), "totalcount" => $count)); // F = month name
            $month = strtotime("+1 month", $month);
        }

        return view("hotel.authentication.hotelDashboard",compact('bookingData','data','total_room','total_booking','hotelData'));
    }

    public function login()
    {
        return view('hotel.authentication.hotelLogin');
    }

    public function hotelLogin(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        $result = Hotel::select("*")->where("username", $username)->where("password", $password)->where("is_block","no")->get();
        $num = count($result);

        if ($num <= 0) {
            return redirect('/login')->with("message", "Username or password is invalid");
        } else {
            Session::put("isHotelLogin", "yes");
            foreach ($result as $row) {
                Session::put('hotel_id', $row->hotel_id);
                Session::put('hotel_name', $row->hotel_name);
                Session::put('email', $row->email);
                Session::put('img', $row->certificationl);
            }
            return redirect('/hotel/hotelDashboard');
        }
    }

    public function changepwd()
    {
        return view('hotel.authentication.changepwd');
    }

    public function updatepwd(Request $request)
    {
        $oldpwd = $request->oldpwd;
        $newpwd = $request->newpwd;

        $id = Session::get("hotel_id");

        $result = Hotel::where("hotel_id", $id)->where("password", $oldpwd)->get();
        if (count($result) <= 0) {
            return redirect('/hotel/changepwd')->with("danger", "Password does not Match");
        } else {
            $obj = Hotel::where('hotel_id', $id)->where("password", $oldpwd)->first();
            $obj->password = $newpwd;
            $obj->save();
            return redirect('/hotel/changepwd')->with("message", "Password updated Sucessfully");
        }
    }

    public function forgotpwd()
    {
        return view("hotel.authentication.forgotPassword");
    }

    public function logout()
    {
        Session::flush();
        return redirect('/login');
    }

    public function checkEmail(Request $request)
    {
        $email =$request->email;

        $result = Hotel::select("*")->where("email",$email)->get();
        $num = count($result);

        if($num <= 0)
        {
            return redirect('/hotel/forgotpwd')->with("danger","Email is Not Found");
        }
        else{
            // email

            foreach ($result as $row) {
                $password = $row ->password;
                $details=[
                     "password" => $password
                ];
                \Mail::to($email)->send(new \App\Mail\HotelForgotPasswordMail($details));
            }

            return redirect('/login')->with("message","Email Send Sucessfuly! Please check Your Email");
        }
    }

}
