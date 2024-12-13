<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherTcOrder extends Model
{
    use HasFactory;
    
    protected $table = 'other_tc_orders';
    protected $primaryKey = 'other_tc_order_id';

    protected $fillable = [
        'otherorderid',
        'other_tc_id',
        'dcid',
        'spid',
        'bidfee',
        'other_bid_response',
        'other_tc_order_status',
        'sku',
        'quantity',
    ];

    public $timestamps = false;

    // Define the relationship with Product
    public function product()
    {
        return $this->belongsTo(Product::class, 'sku', 'sku');
    }
}
