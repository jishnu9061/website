<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class store_issued_items extends Model
{
    protected $table = 'store_issued_items';
    protected $fillable = ['item_name','issued_id','quantity','issued_quantity','current_stock,batch_no'];
}
