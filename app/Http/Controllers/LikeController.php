<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;

class LikeController extends Controller
{
    //

    public function viewLike()
    {
        $likeData = Like::select("*")->leftjoin("tbl_user", "tbl_like.user_id", "=", "tbl_user.user_id")->get();
        return view("admin.like.viewLike", compact("likeData"));
    }
}
