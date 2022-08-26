<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class manufactuers extends Model
{
    protected $table = 'manufactuers';
    protected $fillable = ['manufactuer_name','email','contact_no','mobile','fax','address','city','state','country','zipcode','details'];
}
