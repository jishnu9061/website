<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class pharma_requests extends Model
{
     protected $table = 'pharma_requests';
     protected $fillable = ['request_intend','medicine','requested_quantity','issued_quantity','created_at'];
}
