<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoinRedeem extends Model
{
    use HasFactory;
    protected $table="tbl_redeem_coin";
    protected $primaryKey="redeem_id";
}
