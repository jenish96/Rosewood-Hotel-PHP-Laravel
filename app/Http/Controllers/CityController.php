<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\State;

class CityController extends Controller
{
    public function viewCity()
    {
        $cityData = City::select("*")->leftjoin("tbl_state","tbl_city.state_id","=","tbl_state.state_id")->get();
        return view('admin.city.viewCity',compact('cityData'));
    }
    public function addCity()
    {
        $stateData = State::all();
        return view('admin.city.addCity',compact('stateData'));
    }
    public function insertCity(Request $request)
    {
        $city_name = $request -> txtCity;
        $stateid = $request -> txtstate;

        $result = City::where("city_name", $city_name)->get();
        if (count($result) <= 0) {
        $obj = new City;
        $obj -> city_name =$city_name;
        $obj->state_id = $stateid;
        $obj ->save();
        return redirect('admin/addCity')->with("message", "City inserted successfully");
        }
        else{
            return redirect("admin/addCity")->with("danger", "Record already Exist");
        }
    }

    public function editCity($id)
    {
        $singleData = City::select("*")->where("city_id",$id)->first();
        $stateData = State::all();
        return view('admin.city.updateCity',compact('stateData','singleData'));
    }

    public function updateCity(Request $request)
    {
        $cityid = $request->cid;
        $stateid =$request->txtstate;
        $city_name =$request->txtCity;

        $obj = City::select("*")->where("city_id",$cityid)->first();
        $obj->city_name = $city_name;
        $obj->state_id = $stateid;
        $obj->save();

        return redirect('/admin/viewCity')->with("message","City updated successfully");
    }

    public function deleteCity(Request $request)
    {
        $cityId = $request->deleteid;

        City::where("city_id",$cityId)->delete();

        return redirect('/admin/viewCity')->with("message","City deleted successfully");
    }
}
