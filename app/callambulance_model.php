<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class callambulance_model extends Model
{
    protected $table = 'Callambulance';
    protected $fillable = [
        'ambulance_id','Patient_id','from','to','distance','amount','paid_status','trip_status'
    ];
}
