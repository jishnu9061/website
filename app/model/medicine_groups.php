<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class medicine_groups extends Model
{
    protected $table = 'medicine_groups';
    protected $fillable = ['group_name'];
}
