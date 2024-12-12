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
    ];

    public $timestamps = false;

    // Define the many-to-many relationship with Product
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_order')
                    ->withPivot('quantity')
                    ->withTimestamps();
    }
}
