<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Media;

class UserRoomController extends Controller
{
    public function room()
    {
        $roomData =Room::select("*")->leftjoin("tbl_hotel", "tbl_room.hotel_id", "=", "tbl_hotel.hotel_id")
        ->leftjoin("tbl_media","tbl_room.room_id","=","tbl_media.room_id")->get();
        // echo $roomData;
        return view("user.room.room",compact('roomData'));
    }
    public function roomDetails($id)
    {
        return view("user.room.roomDetails");
        // $roomData =Room::where("room_id",$id)->leftjoin("tbl_hotel", "tbl_room.hotel_id", "=", "tbl_hotel.hotel_id")
        // ->rightjoin("tbl_media","tbl_room.room_id","=","tbl_media.room_id")->first();
        // return view("user.master.roomDetails",compact('roomData'));
    }
}   
