<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Session;

class HotelReviewController extends Controller
{
    //
    public function viewReview()
    {
        $hotel_id = Session::get("hotel_id");
        $reviewData =Review::select("*","tbl_user.username as uname")->leftjoin("tbl_user","tbl_review.user_id","=","tbl_user.user_id")
        ->leftjoin("tbl_hotel","tbl_review.hotel_id","=","tbl_hotel.hotel_id")
        ->leftjoin("tbl_room","tbl_review.room_id","=","tbl_room.room_id")
        ->where("tbl_review.hotel_id",$hotel_id)->get();
        return view("hotel.review.viewReview",compact('reviewData'));
    }
}
