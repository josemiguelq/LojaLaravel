<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable =[
        'name'
    ];
    public  function  models(){
        return $this->belongsTo(serialModel::class, 'brand_id');
    }
}
