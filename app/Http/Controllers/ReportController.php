<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    //
    public function viewReport()
    {

        $data = array();
        $month = strtotime('2021-09-01');
        $current = date('Y-m-d');
        $end = strtotime($current);
        while ($month < $end) {
            $count = 0;
            $mn = date('Ym', $month); //202109
            $result = DB::select("select * from tbl_booking where DATE_FORMAT(booking_date,'%Y%m')='$mn'"); //202109
            $count = count($result);

            array_push($data, array("month" => date('F Y', $month), "totalcount" => $count)); // F = month name
            $month = strtotime("+1 month", $month);
        }

        return view("admin.reports.viewReport", compact('data'));
    }
}
