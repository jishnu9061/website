<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stock_methods extends Model
{
    protected $table = 'stock_methods';
    protected $fillable = ['method_name','profit_percentage'];
}
