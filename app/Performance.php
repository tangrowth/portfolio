<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    protected $fillable = [
    'performance',
    'story',
    'date'
    ];

    
    public function Users(){
        return $this->belongsToMany('App\user');
    }
    public function Departments(){
        return $this->hasMany('App\user');
    }
    public function Posts(){
        return $this->hasMany('App\user');
    }

}
