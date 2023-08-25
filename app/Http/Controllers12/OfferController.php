<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;

class OfferController extends Controller
{
    //
    public function viewOffer()
    {
        $offerData = Offer::all();
        return view("admin.offer.viewOffer", compact('offerData'));
    }

    public function viewmoreOffer($id)
    {
        $offerData = Offer::select("*")->where("offer_id", $id)->first();
        return view("admin.offer.viewmoreOffer", compact('offerData'));
    }

    public function addOffer()
    {
        return view("admin.offer.addOffer");
    }

    public function insertOffer(Request $request)
    {

        $title = $request->txttitle;
        $discription = $request->txtdiscription;
        $status = $request->txtstatus;
        $coupen = $request->txtcoupen;
        $discount = $request->txtdiscount;
        $expire = $request->txtExpire;
        $sdate = $request->startDate;
        $edate = $request->endDate;

        $result = offer::where("title", $title)->get();
        if (count($result) <= 0) {
            $obj = new offer;
            $obj->title = $title;
            $obj->discription = $discription;
            $obj->is_active = $status;
            $obj->coupon_code = $coupen;
            $obj->start_date = $sdate;
            $obj->end_date = $edate;
            $obj->discount = $discount;
            $obj->is_expire = $expire;
            $obj->save();

            return redirect('admin/addOffer')->with("message", "Offer Inserted successfully");
        } else {
            return redirect('/admin/addoffer')->with("danger", "Offer already Exist");
        }
    }
    public function editOffer($id)
    {
        $singleData = offer::select("*")->where("offer_id", $id)->first();
        return view('admin.offer.updateOffer', compact('singleData'));
    }
    public function updateOffer(Request $request)
    {
        $fid = $request->offerid;
        $title = $request->txttitle;
        $discription = $request->txtdiscription;
        $status = $request->txtstatus;
        $coupen = $request->txtcoupen;
        $discount = $request->txtdiscount;
        $expire = $request->txtExpire;
        $sdate = $request->startDate;
        $edate = $request->endDate;



        $obj = offer::select("*")->where("offer_id", $fid)->first();
        $obj->title = $title;
        $obj->discription = $discription;
        $obj->is_active = $status;
        $obj->coupon_code = $coupen;
        $obj->start_date = $sdate;
        $obj->end_date = $edate;
        $obj->discount = $discount;
        $obj->is_expire = $expire;

        $obj->save();

        return redirect("/admin/viewOffer")->with("message", "Offer is Updated Sucessfully");
    }
    public function deleteOffer(Request $request)
    {
        $offerid = $request->deleteid;

        Offer::where("offer_id", $offerid)->delete();

        return redirect('/admin/viewOffer')->with("message", "Offer deleted successfully");
    }
    public function offerIsActive($id, $status)
    {
        $obj = Offer::where("offer_id", $id)->first();
        $obj->is_active = $status;
        $obj->save();
        return redirect('/admin/viewOffer');
    }

    public function offerIsExpire($id, $status)
    {
        $obj = Offer::where("offer_id", $id)->first();
        $obj->is_expire = $status;
        $obj->save();
        return redirect('/admin/viewOffer');
    }
}
