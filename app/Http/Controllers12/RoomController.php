<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    //
    public function viewRoom()
    {
        $roomData =Room::select("*")->leftjoin("tbl_hotel", "tbl_room.hotel_id", "=", "tbl_hotel.hotel_id")->get();
        return view("admin.rooms.viewRoom",compact("roomData"));
    }

    public function viewmoreRoom($id)
    {
        $roomData =Room::where("room_id", $id)->leftjoin("tbl_hotel", "tbl_room.hotel_id", "=", "tbl_hotel.hotel_id")->first();
        return view("admin.rooms.viewmoreRoom",compact("roomData"));
    }

}
