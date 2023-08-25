<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\HotelAmenities;
use App\Models\Media;
use App\Models\Place;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserHotelController extends Controller
{
    //
    public function viewHotelSearch(Request $request)
    {
        $searchterm=$request->hotelname;
        $hotelData = DB::select("select *,(select photo_url from tbl_media where hotel_id=h.hotel_id limit 1) as photo_url from tbl_hotel as h left join tbl_hotel_type as t on t.hotel_type_id=h.hotel_type_id left join tbl_city as c on c.city_id=h.city_id where h.hotel_name like '%".$searchterm."%'");
        return view("user.hotels.viewHotel",compact('hotelData'));
    }
    
    public function viewHotel()
    {
        $hotelData = DB::select("select *,(select photo_url from tbl_media where hotel_id=h.hotel_id limit 1) as photo_url from tbl_hotel as h left join tbl_hotel_type as t on t.hotel_type_id=h.hotel_type_id left join tbl_city as c on c.city_id=h.city_id where h.is_block like 'no'");
   
        return view("user.hotels.viewHotel",compact('hotelData'));
    }

    public function hotelDetails($id)
    {
        $hotelData =Hotel::select("*")->leftjoin("tbl_city","tbl_hotel.city_id","=","tbl_city.city_id")
        ->leftjoin("tbl_hotel_type","tbl_hotel.hotel_type_id","=","tbl_hotel_type.hotel_type_id")
        // ->leftjoin("tbl_place","tbl_hotel.place_id","=","tbl_place.place_id")
        ->where("hotel_id",$id)->first();

        $placeData =Hotel::select("*")->leftjoin("tbl_place","tbl_hotel.place_id","=","tbl_place.place_id")->where("hotel_id",$id)->get();

        $mediadata =Media::select("*")->where("hotel_id",$id)->where("category","Hotel Image")->get();
    
                
        $roomData=DB::select("select *,(select photo_url from tbl_media where room_id=tbl_room.room_id limit 1) as photo_url from tbl_room where hotel_id='$id'");


        $hotelAmenitiesData =HotelAmenities::select("*")->leftjoin("tbl_amenities","tbl_hotel_amenites.amenities_id","=","tbl_amenities.amenities_id")->where("hotel_id",$id)->get();
        return view("user.hotels.hotelDetails",compact('hotelData','mediadata','roomData','placeData','hotelAmenitiesData'));
    }
}
