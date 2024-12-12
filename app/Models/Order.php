<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    
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
        'sku', // Add SKU field here
        'quantity' // Add Quantity field
    ];

    public $timestamps = false;

    // Define the one-to-one relationship with Product
    public function product()
    {
        return $this->belongsTo(Product::class, 'sku', 'sku');
    }
}
