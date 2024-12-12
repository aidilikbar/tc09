<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $table = 'products';
    protected $primaryKey = 'product_id';

    protected $fillable = [
        'sku',
        'product_name',
    ];

    public $timestamps = false;

    // Define the many-to-many relationship with Order
    public function orders()
    {
        return $this->belongsToMany(Order::class, 'product_order')
                    ->withPivot('quantity')
                    ->withTimestamps();
    }
}
