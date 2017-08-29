<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class serialModel extends Model
{
    protected $fillable=['name','brand_id'];

    protected $table = 'serialmodels';

    public function brand(){
        return $this->hasMany(Brand::class,brand_id);
    }
}
