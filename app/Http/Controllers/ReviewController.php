<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;


class ReviewController extends Controller
{
    //
    public function viewReview()
    {
        $reviewData =Review::select("*")->leftjoin("tbl_user","tbl_review.user_id","=","tbl_user.user_id")
        ->leftjoin("tbl_hotel","tbl_review.hotel_id","=","tbl_hotel.hotel_id")
        ->leftjoin("tbl_room","tbl_review.room_id","=","tbl_room.room_id")->get();
        return view("admin.review.viewReview",compact('reviewData'));
    }
}
