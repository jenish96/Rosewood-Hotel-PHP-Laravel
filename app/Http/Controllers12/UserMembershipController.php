<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Coin;

class UserMembershipController extends Controller
{
    //
    public function addMembership()
    {
        return view("user.membership.addMembership");
    }

    public function insertMembership(Request $request)
    {
        $userId =$request-> user_id;
        $mshipname =$request->mshipName;
        $amount =$request ->txtAmount;
        $startDate =$request ->start_date;
        $endDate =$request ->end_date;
        $isPay = $request->pay;
        $transaction =$request ->txtTransNo;

        $obj = new Membership();
        $obj ->user_id =$userId;
        $obj ->name =$mshipname;
        $obj ->amount =$amount;
        $obj ->start_date =$startDate;
        $obj ->end_date =$endDate;
        $obj ->is_pay =$isPay;
        $obj ->tran_no =$transaction;
        $obj ->save();

       
//mail
        $email =Session::get('email');
        $name =Session::get('username');

$details=[
    "email"=>$email,
    "username" =>$name,
    "tno" =>$transaction,
    "days" =>$mshipname,
    "sDate" =>$startDate,
    "eDate" =>$endDate,
    "amount" =>$amount

];
        \Mail::to($email)->send(new \App\Mail\UserMembershipMail($details)); 

        //  coin
         $mcoins = 1000;
         $bookingid = null;
         $ctype ="credit";
         $remark ="On Membership Purchase";
 
 
         $obj = new Coin();
         $obj->user_id =$userId;
         $obj->coins=$mcoins;
         $obj->booking_id =$bookingid;
         $obj->type=$ctype;
         $obj->remark=$remark;
         $obj->save();
 
        return redirect("/user/myMembership")->with("message","Your Membership Now Active Sucessffuly");

        
    }
}
