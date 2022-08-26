<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class medicines_item_details extends Model
{
    protected $table = 'medicines_item_details';
    protected $fillable = ['item_name','batch_no','quantity','price','expiry_date','profit_percentage','sales_price','stock_id','total','current_stock','issued_quantity'];
}
