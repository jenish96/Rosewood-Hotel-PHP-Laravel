<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;

class MediaController extends Controller
{
    //
    public function viewMedia()
    {
        $mediaData = Media::select("*")->leftjoin("tbl_hotel", "tbl_media.hotel_id", "=", "tbl_hotel.hotel_id")
        ->leftjoin("tbl_room", "tbl_media.room_id", "=", "tbl_room.room_id")->get();
        return view("admin.media.viewMedia",compact("mediaData"));
    }
    

}
