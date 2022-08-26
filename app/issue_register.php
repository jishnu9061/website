<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class issue_register extends Model
{
    protected $table = 'issue_register';
    protected $fillable = [
        'date','department','status','medicine_name','medicine_category','quantity','price','amount','alert'
    ];
}
