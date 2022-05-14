<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    protected $fillable = [
    'performance'
    ];
    public function Users(){
        return $this->belongsToMany('App\user');
    }
    public function Department(){
        return $this->hasMany('App\user');
    }
    public function Post(){
        return $this->hasMany('App\user');
    }

}
