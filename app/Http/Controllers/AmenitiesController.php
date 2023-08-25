<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Amenities;

class AmenitiesController extends Controller
{
    //
    public function viewAmenities()
    {
        $amenitiesData =Amenities::all();
        return view("admin.amenities.viewAmenities",compact("amenitiesData"));
    }
    public function addAmenities()
    {
        return view("admin.amenities.addAmenities");
    }
    public function insertAmenities(Request $request)
    {
        $ext = $request->iconimg->extension();
        $icon = time().rand(100,1000).'.'.$ext;
        $request->iconimg->move(public_path('uploads/amenities/'), $icon);
        $amenitiesName = $request ->txtamenities;
        $amenitiesIcon = $icon;

        $result = Amenities::where("am_name", $amenitiesName)->get();
        if (count($result) <= 0) {
        $obj = new Amenities;
        $obj -> am_name =$amenitiesName;
        $obj ->am_icon_pic =$amenitiesIcon;
        $obj ->save();

        return redirect('/admin/addAmenities')->with("message", "Amenities Inserted successfully");
        } else {
        return redirect("admin/addAmenities")->with("danger", "Record already Exist");
        }
    }

    public function editAmenities($id)
    {
        $amenitiesData = Amenities::select("*")->where("amenities_id",$id)->first();
        return view('admin.amenities.updateAmenities',compact('amenitiesData'));
    }
    
    public function updateAmenities(Request $request)
    {
        $am_id = $request->amenities_id;
        $oldimage = $request->am_icon;

        if($request->has('iconimg'))
        {
            unlink(public_path("uploads/amenities/").$oldimage);
            $ext = $request->iconimg->extension();
            $img1 = time().rand(100,1000).'.'.$ext;
            $request->iconimg->move(public_path('uploads/amenities/'), $img1);
        }
        else {
            $img1 = $oldimage;
        }
        
        $amenities  = $request->txtamenities;
        $icon_img = $img1 ;

        $obj = Amenities::select("*")->where("amenities_id",$am_id)->first();
        // echo $obj;
        $obj->am_name = $amenities;
        $obj->am_icon_pic = $icon_img;
        // echo $obj;
        $obj->save();

        return redirect('/admin/viewAmenities')->with("message","Amenities updated successfully");
    }

    public function deleteAmenities(Request $request)
    {
        $amenities_id = $request->deleteid;
        $icon = $request->deleteimage;

        unlink(public_path("uploads/amenities/").$icon);
        Amenities::where("amenities_id",$amenities_id)->delete();

        return redirect('/admin/viewAmenities')->with("message","Amenities Deleted successfully");
    }
    public function amenitiesIsBlock($id,$status)
    {
        $obj=Amenities::where("amenities_id",$id)->first();
        $obj->is_block = $status;
        $obj->save();
        return redirect('/admin/viewAmenities');
    }
}
