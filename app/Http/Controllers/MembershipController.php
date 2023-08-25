<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membership;

class MembershipController extends Controller
{
    //
    public function viewMembership()
    {
       $membershipData = Membership::all();
       return view("admin.membership.viewMembership",compact("membershipData"));
    }
}
