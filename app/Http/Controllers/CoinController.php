<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coin;
use App\Models\Booking;

class CoinController extends Controller
{
    //

    public function viewCoin()
    {
        $coinData = Coin::select("*")->leftjoin("tbl_user", "tbl_coins.user_id", "=", "tbl_user.user_id")->get();
        return view("admin.coin.viewCoin", compact("coinData"));
    }
}
