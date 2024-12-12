<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;

    protected $table = 'actors';
    protected $primaryKey = 'actor_id';

    protected $fillable = [
        'actorid',
        'roles',
        'address',
        'postal_code',
        'city',
        'latitude',
        'longitude',
        'geolocation',
    ];

    public $timestamps = false;
}
