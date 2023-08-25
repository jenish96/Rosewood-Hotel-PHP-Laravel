<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Users;

class UserController extends Controller
{
    //
    public function viewUser()
    {
        $userData =Users::all();
        return view("admin.users.viewUser",compact("userData"));
    }
    public function userIsVerified($id,$status)
    {
        $obj=Users::where("user_id",$id)->first();
        $obj->is_verify = $status;
        $obj->save();
        return redirect('/admin/viewUser');
    }

}
