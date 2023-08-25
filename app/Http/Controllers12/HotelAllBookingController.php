<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\BookingMember;
use App\Models\Offer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HotelAllBookingController extends Controller
{
    //
    public function viewBooking()
    {
      
       $id =Session::get('hotel_id');
       $bookingData = DB::select("select * from tbl_booking as b left join tbl_user as u on u.user_id=b.user_id where b.booking_id in (select booking_id from tbl_book_room where room_id in (select room_id from tbl_room where hotel_id='$id'))");
        return view("hotel.booking.viewBooking",compact('bookingData'));
    }
    public function viewmoreBooking($id)
    {
        $bookingData =Booking::where("booking_id",$id)->leftjoin("tbl_offer", "tbl_booking.offer_id", "=", "tbl_offer.offer_id")->first();
        $bookingMember =BookingMember::select("*")->where("booking_id",$id)->get();
        return view('hotel.booking.viewmoreBooking',compact('bookingData','bookingMember'));
    }
}
