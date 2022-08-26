<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class departments extends Model
{
    protected $table = 'departments';
    protected $fillable = ['depname'];
}
