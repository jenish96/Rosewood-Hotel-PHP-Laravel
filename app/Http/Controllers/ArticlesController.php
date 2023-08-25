<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function viewArticles()
    {
        $articlesData =Articles::select("*")->leftjoin("tbl_user", "tbl_articles.user_id", "=", "tbl_user.user_id")->get();
        return view("admin.articles.ViewArticles",compact("articlesData"));
    }

    public function viewmoreArticles($id)
    {
        $articlesData =Articles::where("articles_id",$id)->leftjoin("tbl_user", "tbl_articles.user_id", "=", "tbl_user.user_id")->first();
        return view("admin.articles.viewmoreArticles",compact("articlesData"));
    }

    public function articlesIsApprove($id,$status)
    {
        $obj=Articles::where("articles_id",$id)->first();
        $obj->is_approve = $status;
        $obj->save();
        return redirect('/admin/viewArticles');
    }
}
