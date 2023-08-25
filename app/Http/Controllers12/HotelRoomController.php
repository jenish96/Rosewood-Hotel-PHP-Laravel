<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Models\Room;
use Illuminate\Support\Facades\Session;

class HotelRoomController extends Controller
{
    //
    public function viewRoom()
    {
        $hotel_id = Session::get("hotel_id");
        $roomData =Room::select("*")->leftjoin("tbl_hotel", "tbl_room.hotel_id", "=", "tbl_hotel.hotel_id")
        ->where("tbl_room.hotel_id",$hotel_id)->get();
        return view("hotel.room.viewRoom",compact("roomData"));
    }

    public function viewmoreRoom($id)
    {
        $roomData =Room::where("room_id", $id)
        ->leftjoin("tbl_hotel", "tbl_room.hotel_id", "=", "tbl_hotel.hotel_id")->first();
        return view('hotel.room.viewMoreRoom',compact('roomData'));
    }

    public function addRoom()
    {
        $roomData =Room::select("*")->leftjoin("tbl_hotel","tbl_room.hotel_id", "=","tbl_hotel.hotel_id")->get();
        return view("hotel.room.addRoom",compact('roomData'));
    }

    public function insertRoom(Request $request)
    {
        $hotel =Session::get('hotel_id');
        $name =$request->txtname;
        $discription= $request->txtdiscription;
        $roomprice= $request->txtprice;
        $status= $request->txtstatus;
        $roomType= $request->txtroomType;
        $capacity= $request->txtcapacity;
        $breakfast= $request->txtbreakfast;
        $dinner= $request->txtdinner;
        $breakfastPrice= $request->txtbreakfastPrice;
        $dinnerPrice= $request->txtdinnerPrice;
        $bed= $request->txtbed;
        $roomNo= $request->txtroomNo;
        $personPrice= $request->txtperson;
    
        $obj= new Room;
        $obj->hotel_id=$hotel;
        $obj->room_name=$name;
        $obj->discription=$discription;
        $obj->room_price=$roomprice;
        $obj->status=$status;
        $obj->room_type=$roomType;
        $obj->capacity=$capacity;
        $obj->is_breakfast=$breakfast;
        $obj->is_dinner=$dinner;
        $obj->breakfast_price=$breakfastPrice;
        $obj->dinner_price=$dinnerPrice;
        $obj->beds=$bed;
        $obj->room_no=$roomNo;
        $obj->person_price=$personPrice;
        $obj->save();

        return redirect('hotel/addRoom')->with("message","Room Inserted successfully");
    }
    public function editRoom($id)
    {
        $singleData = Room::select("*")->where("room_id",$id)->first();
        return view("hotel.room.updateRoom",compact('singleData'));
    }
    public function updateRoom(Request $request)
    {
        $roomId =$request->roomId;
        $hotel =Session::get("hotel_id");
        $name =$request->txtname;
        $discription= $request->txtdiscription;
        $roomprice= $request->txtprice;
        $status= $request->txtstatus;
        $roomType= $request->txtroomType;
        $capacity= $request->txtcapacity;
        $breakfast= $request->txtbreakfast;
        $dinner= $request->txtdinner;
        $breakfastPrice= $request->txtbreakfastPrice;
        $dinnerPrice= $request->txtdinnerPrice;
        $bed= $request->txtbed;
        $roomNo= $request->txtroomNo;
        $personPrice= $request->txtperson;

        $obj = Room::select("*")->where("room_id", $roomId)->first();
        $obj->hotel_id =$hotel;
        $obj->room_name=$name;
        $obj->discription=$discription;
        $obj->room_price=$roomprice;
        $obj->status=$status;
        $obj->room_type=$roomType;
        $obj->capacity=$capacity;
        $obj->is_breakfast=$breakfast;
        $obj->is_dinner=$dinner;
        $obj->breakfast_price=$breakfastPrice;
        $obj->dinner_price=$dinnerPrice;
        $obj->beds=$bed;
        $obj->room_no=$roomNo;
        $obj->person_price=$personPrice;
        $obj->save();
        
        return redirect('/hotel/viewRoom')->with("message", "Room updated successfully");

    }

    public function roomIsBook($id,$status)
    {
        $obj=Room::where("room_id",$id)->first();
        $obj->status = $status;
        $obj->save();
        return redirect('/hotel/viewRoom');
    }

    public function deleteRoom(Request $request)
    {
        $roomId = $request->deleteid;
        
        Room::where("room_id",$roomId)->delete();

        return redirect('/hotel/viewRoom')->with("message","Hotel Room deleted successfully");
    }
}
