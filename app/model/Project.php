<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
     protected $table = 'atttendance';
     protected $fillable = ['id','Employee Code','PresentDays','Absent Days','Normal Working Hours','OT Hours','CL','PL','SL','Total Leave','Late Coming Days','Late Coming Hours','Early Going Days','Early Going Hours','Weekly Off','Weekly Off Present','Holiday','Holiday Present'];
}
