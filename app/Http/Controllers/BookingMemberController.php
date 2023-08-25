<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookingMember;

class BookingMemberController extends Controller
{
    //
    public function viewBookingMember()
    {
        $bookingMemberData =BookingMember::all();
        return view("admin.BookingMember.viewBookingMember",compact('bookingMemberData'));
    }
}
