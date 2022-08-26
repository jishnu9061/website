<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class medicines extends Model
{
     protected $table = 'medicines';
     protected $fillable = ['brand_name','Item_name','item_group','category_name','generic_name','minimum_level','reorder_level','upload_image','medicine_composition','notes','hospital'];
}
