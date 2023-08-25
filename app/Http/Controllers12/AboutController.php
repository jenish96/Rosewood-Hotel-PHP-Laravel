<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;
use App\Models\Booking;
use App\Models\Hotel;
use App\Models\Room;

class AboutController extends Controller
{
    public function masterPage()
    {
        return view('user.master.masterPage');
    }

    public function about()
    {
        return view('user.about.about');
    }
    public function hotelMasterPage()
    {
        return view("hotel.hotelMaster.hotelMasterPage");
    }
}
