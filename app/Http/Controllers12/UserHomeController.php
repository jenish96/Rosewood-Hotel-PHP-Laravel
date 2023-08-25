<?php

namespace App\Http\Controllers;

use App\Models\Amenities;
use App\Models\Articles;
use Illuminate\Http\Request;
use App\Models\Place;
use App\Models\Booking;
use App\Models\City;
use App\Models\Hotel;
use App\Models\News;
use App\Models\Offer;
use App\Models\Room;
use App\Models\Subscribe;
use Illuminate\Support\Facades\DB;

class UserHomeController extends Controller
{
    //
    public function home(){

        $userData =Place::all();
        $place = Place::all();
        $total_place = count($place);
        $hotel = Hotel::all();
        $total_hotel =count($hotel);
        $booking = Booking::all();
        $total_booking = count($booking);
        $room = Room::all();
        $total_room = count($room);
        
        $cityData =City::all();

        $offerData =Offer::select("*")->take(1)->get();

        $hotelData =DB::select("select *,(select photo_url from tbl_media where hotel_id=h.hotel_id limit 1)
         as photo_url from tbl_hotel as h left join tbl_hotel_type as t on t.hotel_type_id=h.hotel_type_id 
         left join tbl_city as c on c.city_id=h.city_id where h.is_block like 'no' limit 3");

        $placeData =Place::select("*")->leftjoin("tbl_city","tbl_place.city_id","=","tbl_city.city_id")
        ->leftjoin("tbl_state","tbl_city.state_id","=","tbl_state.state_id")->take(3)->get();

        $amenitiesData =Amenities::all();
        $newsData =News::all();
        $articlesData =Articles::all();

        return view("user.home.home",compact('total_place','cityData','offerData','newsData','articlesData','placeData','amenitiesData','total_hotel','total_booking','total_room','hotelData'));
    }

    public function addSubcribe(Request $request)
    {
        $email =$request->email;

        $result =Subscribe::where("email",$email)->get();
        if (count($result) <= 0) {
            $obj = new Subscribe();
            $obj ->email =$email;
            $obj->save();
            
            return redirect('/user/home');  
           
        }
        else{

            return redirect('/user/home')->with('message',"You are already Subscriber");
        }
    }
}
