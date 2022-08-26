<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class suppliers extends Model
{
    protected $table = 'suppliers';
    protected $fillable = ['supplier_name','email','contact_no','mobile','fax','address','city','state','country','zipcode','details'];
}
