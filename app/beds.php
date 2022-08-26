<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class beds extends Model
{
    protected $table = 'beds';
    protected $fillable = [
        'bedname','hospital','bedcharge','department','username'
    ];
}
