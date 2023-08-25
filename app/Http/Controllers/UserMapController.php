<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class UserMapController extends Controller
{
    //
    public function viewMap()
    {
        $hotelData =Hotel::all();
        return view("user.map.viewMap",compact('hotelData'));
    }
}
