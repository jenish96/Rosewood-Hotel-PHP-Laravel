<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HotelAmenities;
use App\Models\Amenities;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HotelsAmenitiesController extends Controller
{
    //
    public function viewAmenities()
    {
        $id =Session::get('hotel_id');
        $hotelAmenitiesData = HotelAmenities::select("*")->leftjoin("tbl_amenities", "tbl_hotel_amenites.amenities_id", "=", "tbl_amenities.amenities_id")->where("hotel_id",$id)->get();
        return view("hotel.amenities.viewAmenities", compact('hotelAmenitiesData'));
    }

    public function viewMoreAmenities($id)
    {
        $hotelAmenitiesData = HotelAmenities::select("*")->leftjoin("tbl_amenities", "tbl_hotel_amenites.amenities_id", "=", "tbl_amenities.amenities_id")->where("hotel_amenities_id",$id)->first();
        return view("hotel.amenities.viewMoreAmenities", compact('hotelAmenitiesData'));
    }

    public function addAmenities()
    {
        $amenitiesData = Amenities::all();
        return view("hotel.amenities.addAmenities", compact('amenitiesData'));
    }

    public function insertAmenities(Request $request)
    {
        $hotel = $request->txthotel;
        $amenities = $request->txtAmenities;
        $remark = $request->txtremark;

        $ext1 = $request->txtimg1->extension();
        $image1 = time() . rand(100, 1000) . '.' . $ext1;
        $request->txtimg1->move(public_path('uploads/hotelAmenities/'), $image1);
        $img1 = $image1;

        $ext2 = $request->txtimg2->extension();
        $image2 = time() . rand(100, 1000) . '.' . $ext2;
        $request->txtimg2->move(public_path('uploads/hotelAmenities/'), $image2);
        $img2 = $image2;

        $result = HotelAmenities::where("hotel_id", $hotel)->where("amenities_id", $amenities)->get();
        if (count($result) <= 0) {
            $obj= new HotelAmenities;
            $obj->hotel_id = $hotel;
            $obj->amenities_id = $amenities;
            $obj->remark = $remark;
            $obj->image1 = $img1;
            $obj->image2 = $img2;
            $obj->save();
            return redirect('/hotel/addAmenities')->with("message", "Amenities Inserted successfully");
        } else {
            return redirect("hotel/addAmenities")->with("danger", "Record already Exist");
        }
    }

    public function editAmenities($id)
    {
        $amenitiesData = Amenities::all();
        $singleData = HotelAmenities::select("*")->where("hotel_amenities_id",$id)->first();
        return view("hotel.amenities.updateAmenities",compact('singleData','amenitiesData'));
    }
    
    public function updateAmenities(Request $request)
    {
        $hamenities_id = $request->ha_id;
        $oldimage1 = $request->i1;
        $oldimage2 = $request->i2;
        $amenities = $request->txtAmenities;
        $remark = $request->txtremark;

        if ($request->has('txtimg1')) {

            unlink(public_path("uploads/hotelAmenities/") . $oldimage1);
            $ext = $request->txtimg1->extension();
            $img1 = time() . rand(100, 1000) . '.' . $ext;
            $request->txtimg1->move(public_path('uploads/hotelAmenities/'), $img1);
        } else {
            $img1 = $oldimage1;
        }
        if ($request->has('txtimg2')) {

            unlink(public_path("uploads/hotelAmenities/") . $oldimage2);
            $ext = $request->txtimg2->extension();
            $img2 = time() . rand(100, 1000) . '.' . $ext;
            $request->txtimg2->move(public_path('uploads/hotelAmenities/'), $img2);
        } else {
            $img2 = $oldimage2;
        }
        
        
        $obj = HotelAmenities::select("*")->where("hotel_amenities_id", $hamenities_id)->first();
        $obj->amenities_id = $amenities;
        $obj->remark = $remark;
        $obj->image1 = $img1;
        $obj->image2 = $img2;
        $obj->save();

        return redirect('/hotel/viewAmenities')->with("message", "Hotel Amenities updated successfully");
    }

    public function deleteAmenities(Request $request)
    {
        $amenitiesId = $request->deleteid;
        $img1 = $request->deleteimage1;
        $img2 = $request->deleteimage2;
       
        unlink(public_path("uploads/hotelAmenities/").$img1);
        unlink(public_path("uploads/hotelAmenities/").$img2);
        HotelAmenities::where("hotel_amenities_id",$amenitiesId)->delete();

        return redirect('/hotel/viewAmenities')->with("message","Hotel Amenities deleted successfully");
    }
}
