<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelType extends Model
{
    use HasFactory;
    protected $table = "tbl_hotel_type";
    protected $primaryKey = "hotel_type_id";
}
