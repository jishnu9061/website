<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class purchase_items extends Model
{
    protected $table = 'purchase_items';
    protected $fillable = ['purchase_id','Item_name','batch_no','quantity','price','total'];
}
