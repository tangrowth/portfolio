<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    public function Users(){
        return $this->hasMany('App\user');
    }
    public function Department(){
        return $this->hasMany('App\user');
    }
    public function Post(){
        return $this->hasMany('App\user');
    }

}
