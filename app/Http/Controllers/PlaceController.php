<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;
use App\Models\City;
use Illuminate\Support\Str;

class PlaceController extends Controller
{
    //
    public function viewPlace()
    {
        $placeData =Place::select("*")->leftjoin("tbl_city", "tbl_place.city_id", "=", "tbl_city.city_id")->get();
        return view("admin.places.viewPlace",compact("placeData"));
    }
    public function addPlace()
    {
        $cityData =City::all();
        return view("admin.places.addPlace",compact('cityData'));
    }
    public function insertPlace(Request $request)
    {
        $place_name = $request -> txtpname;
        $desc = $request -> txtdiscription;

        $ext1 = $request->txtimg1->extension();
        $img1 = time() . rand(100, 1000) . '.' . $ext1;
        $request->txtimg1->move(public_path('uploads/place/'), $img1);
        $image1 = $img1;
        $ext2 = $request->txtimg2->extension();
        $img2 = time() . rand(100, 1000) . '.' . $ext2;
        $request->txtimg2->move(public_path('uploads/place/'), $img2);
        $image2 = $img2;
        
        // $ext3 = $request->txturl->extension();
        // $video = time() . rand(100, 1000) . '.' . $ext3;
        // $request->txturl->move(public_path('uploads/place/'), $video);
        // $placevideo = $video;

        $url = $request -> txturl;
        $city = $request -> txtcity;

        $result = Place::where("place_name", $place_name)->where("city_id",$city)->get();
        if (count($result) <= 0) {
        $obj = new Place();
        $obj->place_name =$place_name;
        $obj->place_discription = $desc;
        $obj -> image1 = $image1;
        $obj -> image2 = $image2;
        // $obj -> video_url = $placevideo;
        $obj -> video_url =$url;
        $obj -> city_id = $city;
        $obj ->save();

        return redirect('admin/addPlace')->with('message','Place is inserted');
    }
    else{
        return redirect("admin/addPlace")->with("danger", "Record already Exist");
    }
    }

    public function editPlace($id)
    {
        $singleData =Place::select("*")->where("place_id",$id)->first();
        $cityData =City::all();
        return view('admin.places.updatePlace',compact('singleData','cityData'));
    }

    public function updatePlace(Request $request)
    {
        
        $p_id = $request->p_id;
        $oldimage1 = $request->img1;
        $oldimage2 = $request->img2;

        if ($request->has('txtimg1')) {

            unlink(public_path("uploads/place/") . $oldimage1);
            $ext = $request->txtimg1->extension();
            $imag1 = time() . rand(100, 1000) . '.' . $ext;
            $request->txtimg1->move(public_path('uploads/place/'),$imag1);

        } else {
            $imag1 = $oldimage1;
        }
        if ($request->has('txtimg2')) {
            unlink(public_path("uploads/place/") . $oldimage2);
            $ext = $request->txtimg2->extension();
            $imag2 = time() . rand(100, 1000) . '.' . $ext;
            $request->txtimg2->move(public_path('uploads/place/'),$imag2);
        } else {
            $imag2 = $oldimage2;
        }
        $placename =$request ->txtpname;
        $discription =$request ->txtdiscription;
        $videourl = $request -> txturl;
        $city = $request -> txtcity;

        $obj = Place::select("*")->where("place_id", $p_id)->first();
        $obj->place_name =$placename;
        $obj->place_discription = $discription;
        $obj ->image1=$imag1;
        $obj ->image2=$imag2;
        $obj -> video_url = $videourl;
        $obj -> city_id = $city;
        $obj ->save();

        return redirect('/admin/viewPlace')->with("message", "Place updated successfully");

    }

    public function deletePlace(Request $request)
    {
        $hotelId = $request->deleteid;
        $img1 = $request->deleteimage1;
        $img2 = $request->deleteimage2;
        $video = $request->deletevideo;

        unlink(public_path("uploads/place/").$img1);
        unlink(public_path("uploads/place/").$img2);
        unlink(public_path("uploads/place/").$video);
        Place::where("place_id",$hotelId)->delete();

        return redirect('/admin/viewPlace')->with("message","Place deleted successfully");
    }
}
