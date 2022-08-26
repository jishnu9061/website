<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class giveallowance extends Model
{
	protected $table = 'giveallowance';
      protected $fillable = ['staffid','allowanceid','type','checked'];



    public function setCategoryAttribute($value)
    {
        $this->attributes['category'] = json_encode($value);
    }

    public function getCategoryAttribute($value)
    {
        return $this->attributes['category'] = json_decode($value);
    }

}
