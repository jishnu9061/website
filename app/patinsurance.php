<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patinsurance extends Model
{
     protected $table = 'patientinsurance';
    protected $fillable = [
        'name','address','phone','occupation','employer','empphoneno','empaddress','bday','groupno','policyno','copayment','patienthere'
        

    ];
}
