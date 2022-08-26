<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class store_request extends Model
{
    protected $table = '  pharma_request';
     protected $fillable = [
        'date','department','description','medicine','category','quantity'
        

    ];
}
