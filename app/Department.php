<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function User(){
        return $this->hasMany('App/User');
    }
    
    public function Performance(){
        return $this->belongTo('App/performance');
    }
    
    public function Post(){
        return $this->hasMany('App\user');
    }
}
