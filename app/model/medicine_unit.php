<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class medicine_unit extends Model
{
    protected $table = 'medicine_unit';
    protected $fillable = ['unit_name'];
}
