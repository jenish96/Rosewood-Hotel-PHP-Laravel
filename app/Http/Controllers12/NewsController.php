<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    //  
    public function viewNews()
    {
        $newsData =News::all();
        return view("admin.news.viewNews",compact('newsData'));
    }

    public function viewmoreNews($id)
    {
        $newsData =News::where("news_id",$id)->select("*")->first();
        return view("admin.news.viewmoreNews",compact('newsData'));
    }

    public function addNews()
    {
        return view('admin.news.addnews');  
    }
    public function insertNews(Request $request)
    {
        $title =$request->txttitle;
        $discription =$request->txtdiscription;

        $ext = $request->txtimg->extension();
        $newsimg = time() . rand(100, 1000) . '.' . $ext;
        $request->txtimg->move(public_path('uploads/news/'), $newsimg);
        $img = $newsimg;

        $status= $request->txtstatus;
        $date= $request->txtdate;
    
        $obj= new News;
        $obj->title=$title;
        $obj->description=$discription;
        $obj->news_img=$img;
        $obj->is_active=$status;
        $obj->news_date=$date;
        $obj->save();

        return redirect('admin/addNews')->with("message","News Inserted successfully");
    }
    public function editNews($id)
    {
        $singleData = News::select("*")->where("news_id",$id)->first();
        return view('admin.news.updateNews',compact('singleData'));
    }

    public function updateNews(Request $request)
    {
        $news_id= $request ->newsid;
        $oldimg =$request ->image;
        $title =$request->txttitle;
        $discription =$request->txtdiscription;
        if ($request->has('txtimg')) {

            unlink(public_path("uploads/news/") . $oldimg);
            $ext = $request->txtimg->extension();
            $newsimg = time() . rand(100, 1000) . '.' . $ext;
            $request->txtimg->move(public_path('uploads/news/'), $newsimg);
        } else {
            $newsimg = $oldimg;
        }
        $status= $request->txtstatus;
        $date= $request->txtdate;

        $obj=News::select("*")->where("news_id",$news_id)->first();
        $obj->title=$title;
        $obj->description=$discription;
        $obj->news_img=$newsimg;
        $obj->is_active=$status;
        $obj->news_date=$date;
        $obj->save();

        return redirect('/admin/viewNews')->with("message","News Is Updated");
    }

    public function deleteNews(Request $request)
    {
        $newsid = $request->deleteid;
        $img = $request->deleteimage;

        unlink(public_path("uploads/news/").$img);
        News::where("news_id",$newsid)->delete();

        return redirect('/admin/viewNews')->with("message","News deleted successfully");

    }
    public function newsIsActive($id,$status)
    {
        $obj=News::where("news_id",$id)->first();
        $obj->is_active = $status;
        $obj->save();
        return redirect('/admin/viewNews');
    }

}
