<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OtherTcOrder extends Model
{
    protected $table = 'other_tc_orders';
    protected $primaryKey = 'other_tc_order_id';

    protected $fillable = [
        'otherorderid',
        'other_tc_id',
        'dcid',
        'spid',
        'bidfee',
        'order_bid_response',
        'other_tc_order_status',
    ];

    public $timestamps = false;
}
