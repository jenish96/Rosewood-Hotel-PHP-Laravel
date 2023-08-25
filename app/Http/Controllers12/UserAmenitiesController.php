<?php

namespace App\Http\Controllers;

use App\Models\Amenities;
use App\Models\HotelAmenities;
use Illuminate\Http\Request;

class UserAmenitiesController extends Controller
{
    //
    public function amenitiesDetails($id)
    {
        $AllamenitiesData =Amenities::all();
        $amenitiesData =HotelAmenities::select("*")->leftjoin("tbl_amenities","tbl_hotel_amenites.amenities_id","=","tbl_amenities.amenities_id")->where("hotel_amenities_id",$id)->first();
        return view('user.amenities.amenitiesDetails',compact('amenitiesData','AllamenitiesData'));
    }
}
