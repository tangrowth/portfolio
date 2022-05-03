<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function getByDepartment(int $limit_count = 10)
    {
        return $this->posts()->with('department')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
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
