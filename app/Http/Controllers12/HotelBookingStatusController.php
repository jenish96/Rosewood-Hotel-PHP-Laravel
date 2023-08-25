<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookingStatus;

class HotelBookingStatusController extends Controller
{
    //
    public function viewStatus($id)
    {
        $bookingStatusData =BookingStatus::select("*")->where("booking_id",$id)->first();

        // $roomdata =Room
        return view("hotel.bookingStatus.viewBookingStatus",compact('bookingStatusData'));
    }
}
