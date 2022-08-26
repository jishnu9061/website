<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hospitals extends Model
{
   protected $table = 'hospitals';
    protected $fillable = [
        'name','location','category'
    ];
}
