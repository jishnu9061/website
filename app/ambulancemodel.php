<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;

class ambulancemodel extends Model
{
    protected $table = 'amb_ulance';
    protected $fillable = [
        'vehicle_name','vehicle_model','year_made','driver_name','driver_license','driver_contact','vehicle_type','status'
    ];
}
