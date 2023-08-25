<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;

class UserPlaceController extends Controller
{
    //
    public function viewPlace()
    {
        $placeData =Place::select("*")->leftjoin("tbl_city", "tbl_place.city_id", "=", "tbl_city.city_id")->get();
        return view("user.place.viewPlace",compact("placeData"));
    }

    public function placeDetails($id)
    {
        $placeData =Place::select("*")->where("place_id",$id)->first();
        $allPlaceData =Place::select("*")->leftjoin("tbl_city", "tbl_place.city_id", "=", "tbl_city.city_id")->take(5)->get();
        return view("user.place.placeDetails",compact("allPlaceData","placeData"));
    }
}
