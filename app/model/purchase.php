<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class purchase extends Model
{
    protected $table = 'purchase';
    protected $fillable = ['manufacturer','purchase_date','purchase_orderno','payment_type','grand_total','supplier'];
}
