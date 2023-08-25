<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    //
    public function viewContactUs()
    {
        $contactData =ContactUs::all();
        return view("admin.contactUs.viewContactUs",compact('contactData'));
    }
}
