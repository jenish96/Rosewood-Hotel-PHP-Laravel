<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use Illuminate\Support\Facades\Session;

class HotelAccountController extends Controller
{
    //
    public function viewAccount()
    {
        $hotelid =Session::get('hotel_id');
        $hotelData = Hotel::select("*")->leftjoin("tbl_city","tbl_hotel.city_id","=","tbl_city.city_id")->where("hotel_id",$hotelid)->first();
        return view("hotel.account.viewAccount",compact('hotelData','hotelid'));
    }

    public function editAccount()
    {
        $id =Session::get('hotel_id');

        $hotelData =Hotel::Select("*")->where("hotel_id",$id)->first();
        return view('hotel.account.editAccount',compact('hotelData'));
    }

    public function updateAccount(Request $request)
    {
        $id =Session::get('hotel_id');
        $uname =$request->txtUsername;
        $email =$request->txtEmail;
        $phone =$request->txtphone;

        $obj = Hotel::where("hotel_id",$id)->first();
        $obj ->username =$uname;
        $obj ->email =$email;
        $obj ->contact_no =$phone;
        $obj->save();

        return redirect('/hotel/viewAccount')->with('message',"Your Account Updated Sucessfully");
    }
}
