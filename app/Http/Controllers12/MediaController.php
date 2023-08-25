<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;
use App\Models\Hotel;
use App\Models\Room;
use Illuminate\Support\Facades\Session;

class MediaController extends Controller
{
    //

    public function viewMedia()
    {
        $hotelMedia = Media::select("*")->leftjoin("tbl_hotel", "tbl_media.hotel_id", "=", "tbl_hotel.hotel_id")
            ->where("category", "Hotel Image")->get();

        $roomMedia = Media::select("*")->leftjoin("tbl_room", "tbl_media.room_id", "=", "tbl_room.room_id")
            ->where("category", "Room Image")->get();
        return view("admin.media.viewMedia", compact('hotelMedia','roomMedia'));
    }

    public function viewmoreHotelMedia($id)
    {
        $mediaData = Media::select("*")->where("media_id", $id)
            ->leftjoin("tbl_hotel", "tbl_media.hotel_id", "=", "tbl_hotel.hotel_id")
            ->first();
        return view("admin.media.viewmoreHotelMedia", compact("mediaData"));
    }

    public function viewmoreRoomMedia($id)
    {
        $mediaData = Media::select("*")->where("media_id", $id)
            ->leftjoin("tbl_room", "tbl_media.room_id", "=", "tbl_room.room_id")->first();
        return view("admin.media.viewmoreRoomMedia", compact("mediaData"));
    }

    public function addMedia()
    {
        $hotelData = Hotel::all();
        return view("admin.media.addMedia", compact('hotelData'));
    }
    public function insertMedia(Request $request)
    {
        $hotel_id = $request->txthotel;
        $category = $request->txtcategory;

        $ext = $request->txtphoto->extension();
        $photo = time() . rand(100, 1000) . '.' . $ext;
        $request->txtphoto->move(public_path('uploads/media/'), $photo);
        $img = $photo;

        $video_url = $request->txtvideo;


        $obj = new Media();
        $obj->hotel_id = $hotel_id;
        $obj->category = $category;
        $obj->photo_url = $img;
        $obj->video_url = $video_url;
        $obj->save();

        return redirect("/admin/addMedia")->with("message", "Media inserted successfully");
    }
    public function editMedia($id)
    {
        $singleData = Media::select("*")->where('media_id', $id)->first();
        $hotelData = Hotel::all();
        return view('admin.media.updateMedia', compact('singleData', 'hotelData'));
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
        $hotelid = $request->txthotel;
        $category = $request->txtcategory;
        $image = $img;
        $video = $request->txtvideo;


        $obj = Media::select("*")->where("media_id", $mediaid)->first();
        $obj->hotel_id = $hotelid;
        $obj->category = $category;
        $obj->photo_url = $image;
        $obj->video_url = $video;
        $obj->save();

        return redirect('/admin/viewMedia')->with("message", "Media Updated successfully");
    }

    public function deleteMidea(Request $request)
    {
        $mediaId = $request->deleteid;
        $img = $request->deleteimage;
        
        unlink(public_path("uploads/media/") . $img);
        Media::where("media_id", $mediaId)->delete();

        return redirect('/admin/viewMedia')->with("message", "Media deleted successfully");
    }
}
