<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class performances extends Model
{
    public function Users(){
        return $this->hasMany('App\user');
    }
    

}
