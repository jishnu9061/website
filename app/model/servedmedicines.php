<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class servedmedicines extends Model
{
    protected $table = 'servedmedicines';
    protected $fillable = ['medicinename','priceperitem','quantity','totalprice'];
}
