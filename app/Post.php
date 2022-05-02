<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function User(){
        return $this->belongTo('App/User');
    }
    
    public function Department(){
        return $this->belongTo('App/department');
    }
    
    public function Performance(){
        return $this->belongTo('App/performance');
    }
}
