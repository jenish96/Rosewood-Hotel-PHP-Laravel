<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserHomeController extends Controller
{
    //
    public function home(){

        return view("user.home.home");
    }
}
