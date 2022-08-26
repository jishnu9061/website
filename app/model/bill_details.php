<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bill_details extends Model
{
    protected $table = 'bill_details';
    protected $fillable = ['id','bill_no','patient_type','opd_no','ipd_no','Patient_name','doctor_name','medicine_category_name','medecine_name','Batch_no','Expiry_date','Quantity','sale_price','amount','total','discount','tax','net_amount','note'];
}
