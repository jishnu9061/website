<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class payment_type extends Model
{
    protected $table = 'payment_type';
    protected $fillable = ['payment_name'];
}
