<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;

class UserOfferController extends Controller
{
   //
   public function offer()
   {
       $offerData =Offer::select("*")->where("is_active","yes")->get();
       return view("user.offer.viewOffer",compact('offerData'));
   }
}
