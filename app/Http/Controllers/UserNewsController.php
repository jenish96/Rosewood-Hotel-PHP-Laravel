<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class UserNewsController extends Controller
{
    //
    public function news()
    {
        $newsData = News::all();
        return view("user.news.news",compact('newsData'));
    }
}
