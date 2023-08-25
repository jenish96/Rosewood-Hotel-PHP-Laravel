<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookingMember;

class HotelBookingMemberController extends Controller
{
    //
    public function viewBookingMember()
    {
        $bookingMemberData =BookingMember::all();
        return view("hotel.bookingMember.viewBookingMember",compact('bookingMemberData'));
    }
}
