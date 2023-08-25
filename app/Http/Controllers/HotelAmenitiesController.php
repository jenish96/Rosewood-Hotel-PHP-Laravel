<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HotelAmenities;

class HotelAmenitiesController extends Controller
{
    //
    public function viewHotelAmenities()
    {
        $hotelAmenitiesData =HotelAmenities::select("*")
        ->leftjoin("tbl_hotel","tbl_hotel_amenites.hotel_id","=","tbl_hotel.hotel_id")
        ->leftjoin("tbl_amenities","tbl_hotel_amenites.amenities_id","=","tbl_amenities.amenities_id")->get();
        return view("admin.hotelAmenities.viewHotelAmenities",compact("hotelAmenitiesData"));
    }

    public function viewmoreHotelAmenities($id)
    {
        $hotelAmenitiesData =HotelAmenities::where("hotel_amenities_id", $id)
        ->leftjoin("tbl_hotel","tbl_hotel_amenites.hotel_id","=","tbl_hotel.hotel_id")
        ->leftjoin("tbl_amenities","tbl_hotel_amenites.amenities_id","=","tbl_amenities.amenities_id")->first();
        return view("admin.hotelAmenities.viewmoreHotelAmenities",compact("hotelAmenitiesData"));
    }

}
