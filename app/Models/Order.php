<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'order_id';

    protected $fillable = [
        'orderid',
        'customer',
        'dcid',
        'spid',
        'tcid',
        'order_status',
        'order_fee',
    ];

    public $timestamps = false;
}
