<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;

class HotelOfferController extends Controller
{
    //
    public function viewOffer()
    {
        $offerData =Offer::all();
        return view("hotel.offer.viewOffer",compact('offerData'));
    }

    public function viewmoreOffer($id)
    {
        $offerData =Offer::select("*")->where("offer_id",$id)->first();
        return view("hotel.offer.viewmoreOffer",compact('offerData'));
    }
}
