<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;
use App\Models\Hotel;
use App\Models\Room;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class HotelMediaController extends Controller
{
    //
    public function viewMedia()
    {
        $hotel_id = Session::get("hotel_id");

        $roomData = DB::select("select * from tbl_media as m left join tbl_room as r on r.room_id=m.room_id left join tbl_hotel as h on h.hotel_id=r.hotel_id where r.hotel_id='$hotel_id'");
        $hotelData = DB::select("select * from tbl_media as m  where m.hotel_id='$hotel_id'");

        return view("hotel.media.viewMedia", compact("roomData", 'hotelData'));
    }
    public function addMedia()
    {
        $hotelData = Hotel::all();
        $hotel_id = Session::get("hotel_id");
        $roomdata  = Room::select("*")->where("hotel_id", $hotel_id)->get();
        return view("hotel.media.addMedia", compact('hotelData', 'roomdata'));
    }
    public function insertMedia(Request $request)
    {
        // $hotel_id = Session::get('hotel_id');
        $hotel_id = null;
        $category = $request->txtcategory;

        $ext = $request->txtphoto->extension();
        $photo = time() . rand(100, 1000) . '.' . $ext;
        $request->txtphoto->move(public_path('uploads/media/'), $photo);
        $img = $photo;

        $video_url = $request->txtvideo;
        $room_id = $request->txtroom;


        $obj = new Media();
        $obj->hotel_id = $hotel_id;
        $obj->category = $category;
        $obj->photo_url = $img;
        $obj->video_url = $video_url;
        $obj->room_id = $room_id;
        $obj->save();

        return redirect("/hotel/addMedia")->with("message", "Media inserted successfully");
    }
    public function editMedia($id)
    {
        $singleData = Media::select("*")->where('media_id', $id)->first();
        $hotelData = Hotel::all();
        $roomData = Room::all();
        return view('hotel.media.updateMedia', compact('singleData', 'hotelData', 'roomData'));
    }

    public function updateMedia(Request $request)
    {
        $mediaid = $request->m_id;
        $oldimage = $request->image;

        if ($request->has('txtphoto')) {

            unlink(public_path("uploads/media/") . $oldimage);
            $ext = $request->txtphoto->extension();
            $img = time() . rand(100, 1000) . '.' . $ext;
            $request->txtphoto->move(public_path('uploads/media/'), $img);
        } else {
            $img = $oldimage;
        }
        // $hotelid ="";
        $hotelid = $request->hid;
        $category = $request->txtcategory;
        $image = $img;
        $video = $request->txtvideo;
        $room = $request->txtroom;

        $obj = Media::select("*")->where("media_id", $mediaid)->first();
        $obj->hotel_id = $hotelid;
        $obj->category = $category;
        $obj->photo_url = $image;
        $obj->video_url = $video;
        $obj->room_id = $room;
        $obj->save();

        return redirect('/hotel/viewMedia')->with("message", "Media Updated successfully");
    }

    public function deleteMidea(Request $request)
    {
        $mediaId = $request->deleteid;
        $image = $request->deleteimage;

        unlink(public_path("uploads/media/") . $image);
        Media::where("media_id", $mediaId)->delete();

        return redirect('/hotel/viewMedia')->with("message", "Media deleted successfully");
    }
}
