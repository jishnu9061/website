<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class calender_model extends Model
{
    protected $table='calender';
    protected $fillable=[
        'title','start','end'
    ];
}
