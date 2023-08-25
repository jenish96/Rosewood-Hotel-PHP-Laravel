<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomBooking;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HotelRoomBookingController extends Controller
{
    //
    public function viewRoomBooking()
    {
        $id =Session::get('hotel_id');
        $roombookingData =RoomBooking::select("*")->leftjoin("tbl_booking","tbl_book_room.booking_id","=","tbl_booking.booking_id")
        ->leftjoin("tbl_room","tbl_book_room.room_id","=","tbl_room.room_id")->where("hotel_id",$id)->get();

        // $roombookingData = DB::select("select * from tbl_booking where booking_id in (select booking_id from tbl_book_room where room_id in (select room_id from tbl_room where hotel_id='$id'))");
        return view("hotel.roomBooking.viewRoomBooking",compact('roombookingData'));
    }
}
