<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    protected $table = 'patient';
    protected $fillable = [
        'id','firstname','lastname','phoneno','address','disease','medicalhistory','role','scheme1','scheme2'
    ];
}
