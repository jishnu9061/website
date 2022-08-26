<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patientambu extends Model
{
    protected $table = 'patientambus';
    protected $fillable = [
        'ambulance_id','patient_id','descripton','status'
    ];
}
