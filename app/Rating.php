<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function rater(){
        return $this->belongsTo(User::class,'rater_id','id');
    }
}
