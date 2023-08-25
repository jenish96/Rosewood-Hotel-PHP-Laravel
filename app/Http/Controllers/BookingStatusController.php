<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookingStatus;

class BookingStatusController extends Controller
{
    //
    public function viewStatus($id)
    {
        $bookingStatusData =BookingStatus::select("*")->where("booking_id",$id)->first();;
        return view("admin.BookingStatus.viewBookingStatus",compact('bookingStatusData'));
    }

    public function bookingIscomplete($id,$status)
    {   
        $obj=BookingStatus::where("booking_id",$id)->first();
        $obj->status = $status;
        $obj->save();
         return redirect('/admin/viewStatus/'.$id);
    }
}
