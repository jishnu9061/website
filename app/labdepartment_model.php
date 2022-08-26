<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class labdepartment_model extends Model
{
    protected $table = 'lab_department';
    protected $fillable = [
        'dept_id','lab_deptname'
    ];
}
