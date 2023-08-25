<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    //
    public function viewComment($aid="")
    {
        if($aid=="")
        {
            $commentData =Comment::select("*")->leftjoin("tbl_user", "tbl_comments.user_id", "=", "tbl_user.user_id")->get();
        }
        else
        {
            $commentData =Comment::select("*")->leftjoin("tbl_user", "tbl_comments.user_id", "=", "tbl_user.user_id")->where("tbl_comments.articles_id",$aid)->get();
        }
       
        return view("admin.comment.viewComment",compact("commentData"));
    }
    public function commentIsDisplay($id,$status)
    {
        $obj=Comment::where("comment_id",$id)->first();
        $obj->is_display= $status;
        $obj->save();
        return redirect('/admin/viewComment');
    }
}
