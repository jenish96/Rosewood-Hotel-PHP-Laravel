<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\BookingMember;
use App\Models\BookingStatus;
use App\Models\Coin;
use App\Models\Room;
use App\Models\Wallet;
use App\Models\Offer;
use App\Models\RoomBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class UserBookingController extends Controller
{
    public function checkcoupon(Request $request)
    {
        $c = $request->coupon;
        $sql = Offer::where("coupon_code",$c)->where("is_active","yes")->get();
        $response=array();
        if(count($sql)<=0)
        {
            $response["status"]="Not Match";
        }
        else
        {
            $edate="";
            $dis="0";
            $offerid=null;
            foreach($sql as $row)
            {
                $edate =  $row->end_date;
                $dis=  $row->discount;
                $offerid=  $row->offer_id ;
            }
            if(strtotime($edate)<=strtotime(date('Y-m-d')))
            {
                $response["status"]="expire";
            }
            else
            {
                $response["status"]="match";
                $response["discount"]=$dis;
                $response["offerid"]=$offerid;
            }
           
        }
        echo json_encode($response);
    }
    //
    public function bookingForm($id)
    {
        //dd(Session::get('user_id'));
        $coindata= Wallet::where("user_id",Session::get('user_id'))->get();
        $credit=0;
        $debit=0;
        foreach($coindata  as $row)
        {
            if($row->type=="credit")
            {
                $credit=$credit + $row->amount;
            }
            if($row->type=="debit")
            {
                $debit=$debit + $row->amount;
            }
        }
        $balance = $credit - $debit;

        $disabledates = DB::select("select * from tbl_booking where booking_id in (select booking_id from tbl_book_room where room_id='$id')");
       

        $roomData =Room::select("*")->leftjoin("tbl_hotel","tbl_room.hotel_id","=","tbl_hotel.hotel_id")->where("room_id",$id)->first();
        return view("user.userBooking.bookingForm",compact('roomData','balance','disabledates'));
    }

    public function bookingDetails(Request $request)
    {
        $user_id = Session::get('user_id');
        $ckeckIn = $request->checkIn;
        $ckeckout = $request->checkOut;
        $totalroom = $request->totalroom;
        $guest = $request->txtguest;
        $roomPrice = $request->roomPrice;
        $contact = $request->txtcontact;
        $email = $request->txtemail;
        $specialReq = $request->txtspecialReq;
        $otherReq = $request->txtotherReq;
        // $trans_no =$request->txttranNo;
        $trans_no =rand(1111111, 9999999);
        $totalAmount = $request->totalAmount;
        $extraAmount = $request ->extraAmount;
        $discount =$request ->txtdiscount;
        $offerid =$request ->txtofferid;
        $coin =$request ->walletamt;
        $is_pay =$request->txtisPay;
        $pay_mode =$request->txtpaymode;

        // 

        $obj = new Booking();
        $obj->user_id = $user_id;
        $obj->check_in = $ckeckIn;
        $obj->check_out = $ckeckout;
        $obj->total_amount = $totalAmount;
        $obj->room_amount = $roomPrice;
        $obj->total_room = $totalroom;
        $obj->guest = $guest;
        $obj->contact_no = $contact;
        $obj->email_id = $email;
        $obj->special_request = $specialReq;
        $obj->other_request = $otherReq;
        $obj->total_amount = $totalAmount;
        $obj->extra_amount = $extraAmount;
        $obj->is_pay = $is_pay;
        $obj->pay_mode = $pay_mode;
        $obj->transaction_no = $trans_no;
        $obj->discount =$discount;
        $obj->offer_id =$offerid;
        $obj->coins =$coin;
        $obj->save();


        $bookingid=$obj->booking_id;

        //book_room
        $roomId =$request->roomid;

        $obj = new RoomBooking();
        $obj ->booking_id=$bookingid;
        $obj ->room_id=$roomId;
        $obj->save();

        // wallet
        if($coin !== 0)
        {
            $amount =$coin;
            $wtype ="debit";
            $wremark ="Use In Booking";

            $obj =new Wallet();
            $obj->user_id =$user_id;
            $obj->type =$wtype;
            $obj->remark=$wremark;
            $obj->amount=$amount;
            $obj->booking_id=$bookingid;
            $obj->save();
        }
        

        //book_status
        $text = "Pending";
        $status = "yes";

        $obj =new BookingStatus();
        $obj ->booking_id =$bookingid;
        $obj ->status_text =$text;
        $obj ->status =$status;
        $obj ->save();

        //coin
        $cdate=date('Y-m-d');
        $sql=DB::select("select * from tbl_membership where user_id='$user_id' and '$cdate'>=start_date and '$cdate'<=end_date");
        if(count($sql)>=1)
        {
             $bcoins = 1000;
            
            $remark ="On Booking";
            $ctype ="credit";
    
            $obj =new Coin();
            $obj->user_id=$user_id;
            $obj->coins=$bcoins;
            $obj->booking_id =$bookingid;
            $obj->type=$ctype;
            $obj->remark=$remark;
            $obj->save();
        }
      

        $name = Session::get('username');
        $rName=$request->room;
        $hotel=$request->txthotel;
        $details=[
            "hotel"=>$hotel,
            "room"=>$rName,
            "transaction_no"=>$trans_no,
            "username" =>$name,
            "checkIn" =>$ckeckIn,
            "checkOut" =>$ckeckout,
            "Amount" =>$totalAmount

        ];
        \Mail::to($email)->send(new \App\Mail\UserBookingMail($details));

      

        return redirect('/user/addMember/'.$bookingid);
    }


    public function addMember($id)
    {
        $bookingData =Booking::Select("*")->where("booking_id",$id)->first();

        return view('user.userBooking.bookingMember',compact('bookingData'));
    }

    public function addMemberDetails(Request $request)
    {
        $bid = $request->bid;
        $name = $request->txtname;
        $contact = $request->txtContact;
        $birthdate = $request->txtbirth;

        $ext = $request->crtImage->extension();
        $img1 = time() . rand(100, 1000) . '.' . $ext;
        $request->crtImage->move(public_path('uploads/bookingMember/'), $img1);
        $certificate = $img1;

        $obj = new BookingMember();
        $obj->name = $name;
        $obj->booking_id  = $bid;
        $obj->contact_no = $contact;
        $obj->birth_date = $birthdate;
        $obj->certificate = $certificate;
        $obj->save();

        return redirect('/user/viewBooking')->with("message", "Booking  successfully");

    }


    

    
}
