<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HotelType;

class HotelTypeController extends Controller
{
    public function viewHotelType()
    {
        $hoteltypeData = HotelType::all();
        return view('admin.hotelType.viewHotelType', compact('hoteltypeData'));
    }
    public function addHotelType()
    {
        return view('admin.hotelType.addHotelType');
    }
    public function insertHotelType(Request $request)
    {
        // echo $request;
        $ext = $request->txttypeimg->extension();
        $img1 = time() . rand(100, 1000) . '.' . $ext;
        $request->txttypeimg->move(public_path('uploads/hotelType/'), $img1);
        $hotel_type  = $request->hoteltype;
        $type_img = $img1;

        $result = HotelType::where("hotel_type", $hotel_type)->get();
        if (count($result) <= 0) {
            $obj = new HotelType;
            $obj->hotel_type = $hotel_type;
            $obj->image = $type_img;
            $obj->save();

            return redirect('/admin/addHotelType')->with("message", "HotelType Inserted successfully");
        }else{
            return redirect("admin/addHotelType")->with("danger", "Record already Exist");
        }
    }

    public function deleteHotelType(Request $request)
    {
        $hotelTypeId = $request->deleteid;
        $typeimg = $request->deleteimage;

        unlink(public_path("uploads/hotelType/") . $typeimg);
        HotelType::where("hotel_type_id", $hotelTypeId)->delete();

        return redirect('/admin/viewHotelType')->with("message", "Hotel Type Deleted successfully");
    }

    public function editHotelType($id)
    {
        $hoteltypeData = HotelType::select("*")->where("hotel_type_id", $id)->first();
        return view('admin.hotelType.updateHotelType', compact('hoteltypeData'));
    }

    public function updateHotelType(Request $request)
    {
        $type_id = $request->hotel_id;
        $oldimage = $request->hotel_image;

        if ($request->has('txttypeimg')) {
            unlink(public_path("uploads/hotelType/") . $oldimage);
            $ext = $request->txttypeimg->extension();
            $img1 = time() . rand(100, 1000) . '.' . $ext;
            $request->txttypeimg->move(public_path('uploads/hotelType/'), $img1);
        } else {
            $img1 = $oldimage;
        }


        $hotel_type  = $request->hoteltype;
        $type_img = $img1;

        $obj = HotelType::select("*")->where("hotel_type_id", $type_id)->first();
        $obj->hotel_type = $hotel_type;
        $obj->image = $type_img;
        $obj->save();

        return redirect('/admin/viewHotelType')->with("message", "Hotel Type updated successfully");
    }
}
