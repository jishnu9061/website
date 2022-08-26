<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adit extends Model
{ 
	protected $table = 'medicaldepartments';
    protected $fillable = [
        'id','depname'
    ]; //
}
