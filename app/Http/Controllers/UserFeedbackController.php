<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserFeedbackController extends Controller
{
    //
    public function feedback()
    {
        return view("user.feedback.addFeedback");
    }
    
    public function insertfeedback(Request $request)
    {
        $name =$request->name;
        $email =$request->email;
        $user_id = Session::get('user_id');
        $messege =$request->feedback;

        $obj = new Feedback();
        $obj ->name=$name;
        $obj ->email=$email;
        $obj ->user_id=$user_id;
        $obj ->message=$messege;
        $obj ->save();

        return redirect('/user/feedback')->with("message","Form is Submited");
    }

}
