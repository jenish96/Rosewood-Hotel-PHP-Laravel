<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Media;
use App\Models\Review;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UserRoomController extends Controller
{
    public function room(Request $request)
    {
       
        $txtcity=$request->txtcity;
        $checkin = date('Y-m-d',strtotime($request->checkIn));
        $checkout = date('Y-m-d',strtotime($request->checkOut));
      

        $roomData =DB::select("select *,(select photo_url from tbl_media where room_id=r.room_id limit 1)
         as photo_url from tbl_room as r left join tbl_hotel as h on h.hotel_id=r.hotel_id 
         where h.city_id='$txtcity' and room_id not in 
         (select room_id from tbl_book_room where booking_id in 
         (select booking_id from tbl_booking where '$checkin'>=check_in and '$checkout'<=check_out))");
        return view("user.room.room", compact('roomData'));
    }
    public function roomDetails($id)
    {
        
        $roomData = Room::select("*")
        ->leftjoin("tbl_hotel", "tbl_room.hotel_id", "=", "tbl_hotel.hotel_id")
        ->where("room_id", $id)->first();

        $allroomData =DB::select("select *,(select photo_url from tbl_media where room_id=r.room_id limit 1)
         as photo_url from tbl_room as r left join tbl_hotel as h on h.hotel_id=r.hotel_id where r.room_id in (select room_id from tbl_room where hotel_id in (select hotel_id from tbl_room where room_id='$id'))");
        
        $mediaData = Media::select("*")->where("room_id", $id)->get();
        
        $reviewData = Review::select("*")
        ->leftjoin("tbl_user", "tbl_review.user_id", "=", "tbl_user.user_id")
        ->where("room_id", $id)->where("is_display","yes")->get();

        return view("user.room.roomDetails", compact('roomData', 'mediaData', 'allroomData', 'reviewData'));
    }


    public function addreview(Request $request)
    {
        // $name = $request->txtname;
        $name = Session::get('user_id');
        $review = $request->txtreview;
        $ratting = $request->stars;
        $room_id = $request->roomId;
        $hotel_id =$request->hotelId;
        $display = "yes";

        $obj = new Review();
        $obj->user_id = $name;
        $obj->review = $review;
        $obj->room_id = $room_id;
        $obj->rating = $ratting;
        $obj->hotel_id = $hotel_id;
        $obj->is_display = $display;
        $obj->save();

        return redirect("/user/roomDetails/".$room_id)->with("message", "Review Submited successfully");
    }
}
