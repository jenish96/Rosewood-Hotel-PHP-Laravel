<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;
use App\Models\Comment;
use App\Models\Like;
use Illuminate\Support\Facades\Session;
use PHPUnit\Framework\MockObject\Stub\ReturnReference;

class UserArticlesController extends Controller
{
    //
    public function articles()
    {
        $articlesData =Articles::select("*")->where("is_approve","yes")->get();
        return view("user.articles.articles",compact('articlesData'));
    }

    public function addLike($id)
    {
        $aid =$id;
        $like ="yes";
        $user_id=Session::get('user_id');

        $obj =new Like();
        $obj ->user_id=$user_id;
        $obj ->articles_id =$aid;
        $obj ->is_like =$like;
        $obj ->save();

        return redirect('/user/articlesDetaile/'.$id);
    }

    public function articlesDetaile($id)
    {
        $articlesData =Articles::select("*")->where("articles_id",$id)->first();
        $allArticlesData =Articles::all();
        $commentData =Comment::select("*")->leftjoin("tbl_user","tbl_comments.user_id","=","tbl_user.user_id")
        ->where("articles_id",$id)->where("is_display","yes")->get();
        
        $likeData =Like::select("*")->where("articles_id",$id)->get();
        $total_like =count($likeData);

        $total_comment = count($commentData);
        return view("user.articles.articlesDetaile",compact('articlesData','total_like','commentData','allArticlesData','total_comment'));
    }

    public function addArticle(Request $request)
    {
        $user_id =Session::get("user_id");
        $title = $request->txttitle;
        $discription = $request ->txtdescription;
        $videoURL = $request ->txtvideoURL;
        $auther = $request->txtauther;
        $RefLink = $request ->txtRefLink;
        $is_approve ="yes";

        $ext = $request->txtimg1->extension();
        $img1 = time() . rand(100, 1000) . '.' . $ext;
        $request->txtimg1->move(public_path('uploads/articles/'), $img1);
        $image1 = $img1;

        $ext = $request->txtimg2->extension();
        $img2 = time() . rand(100, 1000) . '.' . $ext;
        $request->txtimg2->move(public_path('uploads/articles/'), $img2);
        $image2 = $img2;

        $obj  = new Articles();
        $obj ->title =$title;
        $obj ->description  =$discription;
        $obj ->image1 =$img1;
        $obj ->image2 =$img2;
        $obj ->video_url =$videoURL;
        $obj ->auther =$auther;
        $obj ->ref_link =$RefLink;
        $obj ->is_approve =$is_approve;
        $obj ->user_id  =$user_id;
        $obj ->save();

        Return redirect('/user/articles');
    }

    public function addComment(Request $request)
    {
        $user_id =Session::get("user_id");
        $article_id = $request->articles_id;
        $comment = $request ->txtcomment;
        $display = "yes";

        $obj  = new Comment();
        $obj ->comment =$comment;
        $obj ->user_id  =$user_id;
        $obj ->articles_id =$article_id;
        $obj ->is_display =$display;
        $obj ->save();

        
        return redirect("/user/articlesDetaile/".$article_id);
        
    }
}
