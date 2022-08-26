<?php

namespace App\model;


use Illuminate\Database\Eloquent\Model;

class new_medicines extends Model
{
    protected $table = 'new_medicines';
    protected $fillable = ['medicine_name'];
}
