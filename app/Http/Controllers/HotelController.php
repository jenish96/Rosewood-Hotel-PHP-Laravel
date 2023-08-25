<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\City;
use App\Models\HotelType;
use App\Models\Place;
use Illuminate\Support\Facades\DB;

class HotelController extends Controller
{
    public function viewHotel()
    {
        $hotelData = Hotel::select("*")->leftjoin("tbl_city", "tbl_hotel.city_id", "=", "tbl_city.city_id")
            ->leftjoin("tbl_place", "tbl_hotel.place_id", "=", "tbl_place.place_id")
            ->leftjoin("tbl_hotel_type", "tbl_hotel.hotel_type_id", "=", "tbl_hotel_type.hotel_type_id")->get();
        return view('admin.hotels.viewHotel', compact('hotelData'));
    }
    public function viewmoreHotel($id)
    {
        $hotelData = Hotel::where("hotel_id", $id)->leftjoin("tbl_city", "tbl_hotel.city_id", "=", "tbl_city.city_id")
            ->leftjoin("tbl_place", "tbl_hotel.place_id", "=", "tbl_place.place_id")
            ->leftjoin("tbl_hotel_type", "tbl_hotel.hotel_type_id", "=", "tbl_hotel_type.hotel_type_id")->first();
        return view("admin.hotels.viewmoreHotel", compact('hotelData'));
    }
    public function addHotel()
    {
        $cityData = City::all();
        $hotelTypeData = HotelType::all();
        $placeData = Place::all();
        return view('admin.hotels.addHotel', compact('cityData', 'hotelTypeData', 'placeData'));
    }
    public function insertHotel(Request $request)
    {
        $hotel_name = $request->txthotelname;
        $owner_name = $request->txtownername;
        $contact_no = $request->txtcontactno;
        $email = $request->txtemail;
        $url = $request->txturl;
        $address = $request->txtaddress;
        $landmark = $request->txtlandmark;
        $pincode = $request->txtpincode;
        $city_id = $request->txtcity;
        $hotel_type = $request->txthoteltype;
        $place = $request->txtplace;
        $username = $request->txtusername;
        $password = $request->txtpassword;
        $star = $request->txtstar;
        $block = $request->txtblock;
        $lattitude = $request->txtlattitude;
        $longittude = $request->txtlongittude;

        $ext = $request->imgcertification->extension();
        $certification = time() . rand(100, 1000) . '.' . $ext;
        $request->imgcertification->move(public_path('uploads/hotel/'), $certification);
        $img = $certification;
        $approve = $request->txtapprove;

        $result = Hotel::where("hotel_type_id", $hotel_type)->where("hotel_name", $hotel_name)->get();
        if (count($result) <= 0) {
            $obj = new Hotel;
            $obj->hotel_name = $hotel_name;
            $obj->owner_name = $owner_name;
            $obj->contact_no = $contact_no;
            $obj->email = $email;
            $obj->website_url = $url;
            $obj->address = $address;
            $obj->landmark = $landmark;
            $obj->pincode = $pincode;
            $obj->city_id  = $city_id;
            $obj->hotel_type_id = $hotel_type;
            $obj->place_id  = $place;
            $obj->username = $username;
            $obj->password = $password;
            $obj->star = $star;
            $obj->is_block = $block;
            $obj->lattitude = $lattitude;
            $obj->longittude = $longittude;
            $obj->certification = $img;
            $obj->is_approve = $approve;
            $obj->save();

            return redirect('/admin/addHotel')->with("message", "Hotel Inserted successfully");
        } else {
            return redirect('/admin/addHotel')->with("danger", "Record already Exist");
        }
    }
    public function editHotel($id)
    {
        $singleData = Hotel::select("*")->where("hotel_id", $id)->first();
        $cityData = City::all();
        $hotel_type = HotelType::all();
        $placeData = Place::all();
        return view('admin.hotels.updateHotel', compact('cityData', 'singleData', 'hotel_type', 'placeData'));
    }

    public function updateHotel(Request $request)
    {
        $h_id = $request->hotel_id;
        $oldimage = $request->certi_image;

        if ($request->has('imgcertification')) {

            unlink(public_path("uploads/hotel/") . $oldimage);
            $ext = $request->imgcertification->extension();
            $certification = time() . rand(100, 1000) . '.' . $ext;
            $request->imgcertification->move(public_path('uploads/hotel/'), $certification);
        } else {
            $certification = $oldimage;
        }

        $hotel_name = $request->txthotelname;
        $owner_name = $request->txtownername;
        $contact_no = $request->txtcontactno;
        $email = $request->txtemail;
        $url = $request->txturl;
        $address = $request->txtaddress;
        $landmark = $request->txtlandmark;
        $pincode = $request->txtpincode;
        $city_id = $request->txtcity;
        $hotel_type = $request->txthoteltype;
        $place = $request->txtplace;
        $username = $request->txtusername;
        $password = $request->txtpassword;
        $star = $request->txtstar;
        $block = $request->txtblock;
        $lattitude = $request->txtlattitude;
        $longittude = $request->txtlongittude;
        $img = $certification;
        $approve = $request->txtapprove;

        $obj = Hotel::select("*")->where("hotel_id", $h_id)->first();
        $obj->hotel_name = $hotel_name;
        $obj->owner_name = $owner_name;
        $obj->contact_no = $contact_no;
        $obj->email = $email;
        $obj->website_url = $url;
        $obj->address = $address;
        $obj->landmark = $landmark;
        $obj->pincode = $pincode;
        $obj->city_id  = $city_id;
        $obj->hotel_type_id = $hotel_type;
        $obj->place_id  = $place;
        $obj->username = $username;
        $obj->password = $password;
        $obj->star = $star;
        $obj->is_block = $block;
        $obj->lattitude = $lattitude;
        $obj->longittude = $longittude;
        $obj->certification = $img;
        $obj->is_approve = $approve;
        $obj->save();

        return redirect('/admin/viewHotel')->with("message", "Hotel updated successfully");
    }

    public function hotelIsApprove($id, $status)
    {
        $obj = Hotel::where("hotel_id", $id)->first();
        $obj->is_approve = $status;
        $obj->save();
        return redirect('/admin/viewHotel');
    }

    public function hotelIsBlock($id, $status)
    {
        $obj = Hotel::where("hotel_id", $id)->first();
        $obj->is_block = $status;
        $obj->save();
        return redirect('/admin/viewHotel');
    }


    public function deleteHotel(Request $request)
    {
        $hotelId = $request->deleteid;
        $img = $request->deleteimage;

        unlink(public_path("uploads/hotel/") . $img);
        Hotel::where("hotel_id", $hotelId)->delete();

        return redirect('/admin/viewHotel')->with("message", "Hotel Type deleted successfully");
    }

    public function viewHotelReport($id)
    {
        // $reportData = Hotel::select("*")->where("hotel_id",$id)->first();
        $data = array();
        $month = strtotime('2021-09-01');
        $current = date('Y-m-d');
        $end = strtotime($current);
        while ($month < $end) {
            $count = 0;
            $mn = date('Ym', $month); //202109
            $result = DB::select("select * from tbl_booking where DATE_FORMAT(booking_date,'%Y%m')='$mn' and booking_id in (select booking_id from tbl_book_room where room_id in (select room_id from tbl_room where hotel_id='$id'))"); //202109
            $count = count($result);

            array_push($data, array("month" => date('F Y', $month), "totalcount" => $count)); // F = month name
            $month = strtotime("+1 month", $month);
        }

        return view("admin.hotels.viewHotelReport", compact('data',));
    }
}
