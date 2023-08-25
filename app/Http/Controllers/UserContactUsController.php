<?php

namespace App\Http\Controllers;


use App\Models\ContactUs;
use Illuminate\Http\Request;

class UserContactUsController extends Controller
{
    //
    public function ContactUS()
    {
        return view("user.Contactus.ContactUS");
    }

    public function addContactUS(Request $request)
    {
        $name =$request->name;
        $email =$request ->email;
        $message =$request ->message;

        $obj =new ContactUs();
        $obj ->name =$name;
        $obj ->email =$email;
        $obj ->message=$message;
        $obj ->save();

        return redirect('/user/ContactUS')->with("message","Your Form is Submit");
    }
}
