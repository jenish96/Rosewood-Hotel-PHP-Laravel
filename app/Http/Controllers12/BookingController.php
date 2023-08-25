<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\BookingMember;
use App\Models\Offer;

class BookingController extends Controller
{
    //
    public function viewBooking()
    {
        $bookingData =Booking::select("*")->leftjoin("tbl_user", "tbl_booking.user_id", "=", "tbl_user.user_id")->get();
        return view("admin.booking.viewBooking",compact('bookingData'));
    }
    public function viewmoreBooking($id)
    {
        $bookingData =Booking::where("booking_id",$id)->leftjoin("tbl_offer", "tbl_booking.offer_id", "=", "tbl_offer.offer_id")->first();
        $bookingMember =BookingMember::select("*")->where("booking_id",$id)->get();
        return view('admin.booking.viewmoreBooking',compact('bookingData','bookingMember'));
    }
}
