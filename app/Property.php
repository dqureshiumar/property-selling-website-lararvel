<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'verfiy', 'location', 'baths','beds','prop_status',
    ];
}
