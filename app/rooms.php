<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rooms extends Model
{
     protected $table = 'rooms';
     protected $fillable = [
        'Roomno','allocateduser','Roomcharge','Hospital','Department','category'
        

    ];
}
