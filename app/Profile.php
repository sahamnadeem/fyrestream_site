<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable=['user_id','about_us','general_roles','address','phone_no','hours_of_operation','deal','views','youtube','instagram','picture'];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
