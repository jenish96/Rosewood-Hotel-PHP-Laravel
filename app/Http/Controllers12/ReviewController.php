<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ReviewController extends Controller
{
    //
    public function viewReview()
    {
        $id =Session::get('hotel_id');
        $reviewData =Review::select("*","tbl_user.username as uname")->leftjoin("tbl_user","tbl_review.user_id","=","tbl_user.user_id")
        ->leftjoin("tbl_hotel","tbl_review.hotel_id","=","tbl_hotel.hotel_id")
        ->leftjoin("tbl_room","tbl_review.room_id","=","tbl_room.room_id")->get();
        return view("admin.review.viewReview",compact('reviewData'));
    }

    public function reviewIsDisplay($id, $status)
    {
        $obj = Review::where("review_id", $id)->first();
        $obj->is_display = $status;
        $obj->save();
        return redirect('/admin/viewReview');
    }
}
