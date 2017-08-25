<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class serialModel extends Model
{
    public function brands(){
        $this->belongsTo('App\Brand');
    }
}
