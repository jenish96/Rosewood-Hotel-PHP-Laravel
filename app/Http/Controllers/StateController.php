<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;

class StateController extends Controller
{
    public function viewState()
    {
        $stateData = State::all();
        return view('admin.state.viewState',compact('stateData'));
    }
    public function addState()
    {
        return view('admin.state.addState');
    }
    public function insertState(Request $request)
    {
        $state_name = $request ->txtState;

        $result = State::where("state_name", $state_name)->get();
        if (count($result) <= 0) {
        $obj = new State;
        $obj -> state_name = $state_name;
        $obj ->save();

        return redirect('/admin/addState')->with("message", "State inserted successfully");
        }
        else{
            return redirect("admin/addState")->with("danger", "Record already Exist");
        }
    }
    public function editState($id)
    {
        $stateData = State::select("*")->where("state_id",$id)->first();
        return view('admin.state.updateState',compact('stateData'));
    }

    public function updateState(Request $request)
    {
        $id = $request->sid;
        $state =$request->txtState;

        $obj = State::select("*")->where("state_id",$id)->first();
        $obj->state_name = $state;
        $obj->save();

        return redirect('/admin/viewState')->with("message","State updated successfully");
    }

    public function deleteState(Request $request)
    {
        $stateid = $request->deleteid;

        State::where("state_id",$stateid)->delete();

        return redirect('/admin/viewState')->with("message","State deleted successfully");
    }

}
