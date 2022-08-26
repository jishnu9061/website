<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class visitersmodel extends Model
{
    protected $table = 'visiters';
    protected $fillable = [
       'patient_name','	type','date','bystander_name','bystander_address','phone'
   ];
}
