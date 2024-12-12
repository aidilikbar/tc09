<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $table = 'routes';
    protected $primaryKey = 'route_id';

    protected $fillable = [
        'eta',
        'license_plate',
    ];

    public $timestamps = false;
}
