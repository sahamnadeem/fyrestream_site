<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function media(){
        return $this->hasMany(PostMedia::class,'post_id','id');
    }
    public function tags(){
        return $this->hasMany(PostTag::class,'post_id','id');
    }
    public function type(){
        return $this->belongsTo(PostType::class,'post_type_id','id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
