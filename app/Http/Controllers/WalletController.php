<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wallet;

class WalletController extends Controller
{
    //
    public function viewWallet()
    {
        $walletData = Wallet::select("*")->leftjoin("tbl_user", "tbl_wallet.user_id", "=", "tbl_user.user_id")
        ->leftjoin("tbl_booking", "tbl_wallet.booking_id", "=", "tbl_booking.booking_id")->get();
        return view("admin.wallet.viewWallet", compact("walletData"));
    }
}
