<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class medicines_details extends Model
{
    protected $table = 'medicines_details';
    protected $fillable = ['added_date','purchase_date','order_no','payment_type','supplier','manufacturer','Item_name','batch_no','quantity','issued_quantity','current_stock','purchase_rate','profit_percentage','sales_price','expiry_date','purchase_id','overhead_charge','total_sales_price','department','created_at','updated_at'];
}
