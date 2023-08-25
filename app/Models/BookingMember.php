<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingMember extends Model
{
    use HasFactory;
    protected $table ="tbl_booking_member";
    protected $primaryKey ="m_id";
}
