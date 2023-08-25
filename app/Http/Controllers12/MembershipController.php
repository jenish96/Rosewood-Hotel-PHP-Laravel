<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membership;

class MembershipController extends Controller
{
    //
    public function viewMembership()
    {
       $membershipData = Membership::select("*")->leftjoin("tbl_user","tbl_membership.user_id","=","tbl_user.user_id")->get();
       return view("admin.membership.viewMembership",compact("membershipData"));
    }
}
