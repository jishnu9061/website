<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stock_details extends Model
{
    protected $table = 'stock_details';
     protected $fillable = [
        'item_type','vender','medicine_type','sell_price','purchase_price','quantity','Hospital',];
}
