<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    protected $table = 'appointments';
    protected $fillable = [
        'id'
    ];
}
