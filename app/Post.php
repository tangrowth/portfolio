<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user(){
        return $this->hbelongTo('App/User');
    }
    
    public function department(){
        return $this->belongTo('App/department');
    }
    
    public function performance(){
        return $this->hbelongTo('App/performance');
    }
}
