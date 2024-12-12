<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $table = 'deliveries';
    protected $primaryKey = 'delivery_id';

    protected $fillable = [
        'tcid',
        'dcid',
        'spid',
        'palette',
        'fee',
        'delivery_status',
        'license_plate',
    ];

    public $timestamps = false;
}
