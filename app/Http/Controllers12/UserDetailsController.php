<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Booking;
use App\Models\BookingMember;
use App\Models\Membership;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\BookingStatus;
use App\Models\Coin;
use App\Models\CoinRedeem;
use App\Models\Wallet;
use Illuminate\Support\Facades\DB;

class UserDetailsController extends Controller
{
    //
    public function viewBooking()
    {
        $id =Session::get('user_id');
       // $bookingData =Booking::select("*")->where("user_id",$id)->get();
       $bookingData = DB::select("select * from tbl_booking as b left join tbl_book_room as r on r.booking_id =b.booking_id left join tbl_room as ro on ro.room_id=r.room_id where b.user_id='$id'");
        return view("user.userDetails.myBooking",compact('bookingData'));
    }

    public function viewMorebooking($id)
    {
        $bookingData =Booking::select("*")
        ->leftjoin("tbl_user","tbl_booking.user_id","=","tbl_user.user_id")
        ->leftjoin("tbl_offer","tbl_booking.offer_id","=","tbl_offer.offer_id")
        ->where("booking_id",$id)->first();

        $bookingStatus =BookingStatus::select("*")->where("booking_id",$id)->first();

        $bookingMember =BookingMember::select("*")->where("booking_id",$id)->get();

        return view("user.userDetails.viewMorebooking",compact("bookingData",'bookingStatus','bookingMember'));
    }

    public function bookingCancel($id,$status)
    {   
        $obj=BookingStatus::where("booking_id",$id)->first();
        $obj->status = $status;
        $obj->status_text ="Cancel Booking";
        $obj->save();

        $price = Booking::where("booking_id",$id)->first();

        $booking_id =$id;
        $userId =Session::get("user_id");
        $type ="credit";
        $remark = "Booking Cancel Return";
        $amount = $price->total_amount;

        $obj = new Wallet();
        $obj->user_id =$userId;
        $obj->type =$type;
        $obj->remark =$remark;
        $obj->amount =$amount;
        $obj->booking_id =$booking_id;
        $obj->save();
        
        // Booking::where("booking_id",$id)->delete();  

        return redirect('/user/viewBooking')->with("message","Booking Cancel Sucessfully! Your Amount Credited Sucessfully to your Wallet");
    }

    

    public function myAccount()
    {
        $id =Session::get('user_id');
        $userData =Users::select("*")->where('user_id',$id)->first();
        return view("user.userDetails.myAccount",compact('userData'));
    }

    public function editAccount()
    {
        $id =Session::get('user_id');
        $userData =Users::select("*")->where('user_id',$id)->first();
        return view("user.userDetails.editAccount",compact('userData'));
    }

    public function updateAccount(Request $request)
    {
        $id =Session::get('user_id');
        $name = $request->txtname;
        $email =$request->txtemail;
        $phone =$request->txtphone;

        $obj = Users::select("*")->where("user_id",$id)->first();
        $obj->username = $name;
        $obj->email = $email;
        $obj->contact_no = $phone;
        $obj->save();

        return redirect('/user/myAccount')->with("message","Your Acount Updated Sucessfully");
    }

    public function myCoins()
    {
        $id = Session::get('user_id');
        $coinData =Coin::select("*")->where("user_id",$id)->get();

        $redeemCoin =CoinRedeem::select("*")->where("user_id",$id)->get();
        return view("user.userDetails.myCoins",compact('coinData','redeemCoin'));
    }

    public function redeemCoin(Request $request)
    {
        $id =Session::get('user_id');
        $rcoin =1000;
        $ramount =100;

        $obj = new CoinRedeem();
        $obj ->user_id =$id;
        $obj ->coin =$rcoin;
        $obj ->amount =$ramount;
        $obj ->save();

        // coin entry

        $coin =1000;
        $booking_id =null;
        $type ="debit";
        $remark ="Redeem Coin";

        $obj = new Coin();
        $obj->user_id =$id;
        $obj->coins =$coin;
        $obj->booking_id =$booking_id;
        $obj->type =$type;
        $obj->remark =$remark;
        $obj->save();

        // wallet entry

        $wtype ="credit";
        $wRemark ="Coin Redeem";
        $wamount = 100;
        $booking_id =null;

        $obj = new Wallet();
        $obj->user_id =$id;
        $obj->type =$wtype;
        $obj->remark=$wRemark;
        $obj->amount=$wamount;
        $obj->booking_id =$booking_id;
        $obj->save();


        return redirect("/user/myCoins");
    }

    public function myWallet()
    {
        $id = Session::get('user_id');
        $walletData =Wallet::select("*")->where("user_id",$id)->get();
        return view("user.userDetails.myWallet",compact('walletData'));
    }

    public function myArticle()
    {
        $id = Session::get('user_id');
        $articleData =Articles::select("*")->where('user_id',$id)->first();

        return view("user.userDetails.myArticle",compact('articleData'));
    }

    public function myMembership()
    {
        $id =Session::get('user_id');
        $mship =Membership::where("user_id",$id)->get();
        if (count($mship) <= 0) {
            return view('user.membership.addMembership');

       
    }else{
        $membershipData =Membership::select("*")->where("user_id",$id)->get();
        return view("user.userDetails.myMembership",compact('membershipData'));
    }

    }
}
