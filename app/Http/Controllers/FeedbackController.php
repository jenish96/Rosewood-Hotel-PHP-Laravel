<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    //
    public function viewFeedback()
    {
        $feedbackData =Feedback::select("*")->leftjoin("tbl_user","tbl_feedback.user_id","=","tbl_user.user_id")->get();
        return view('admin.feedback.viewFeedback',compact('feedbackData'));
    }
}
