<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomBooking;

class RoomBookingController extends Controller
{
    //
    public function viewRoomBooking()
    {
        $roombookingData =RoomBooking::select("*")->leftjoin("tbl_booking","tbl_book_room.booking_id","=","tbl_booking.booking_id")->get();
        return view("admin.RoomBooking.viewRoomBooking",compact('roombookingData'));
    }
}
