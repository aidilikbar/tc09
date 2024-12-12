<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    protected $table = 'trucks';
    protected $primaryKey = 'truck_id';

    protected $fillable = [
        'license_plate',
        'height',
        'width',
        'weight',
        'truck_status',
        'latitude',
        'longitude',
        'geolocation',
        'capacity',
    ];

    public $timestamps = false;
}
