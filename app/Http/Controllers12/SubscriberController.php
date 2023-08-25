<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    //
    public function viewSubscriber()
    {
        $subscriberData =Subscribe::all();
        return view('admin.subscriber.viewSubscriber',compact('subscriberData'));
    }
}
