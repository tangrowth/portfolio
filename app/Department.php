<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
    'performance_id',
    'department'
    ];
    
    public function getByDepartment(int $limit_count = 10)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function User(){
        return $this->belongsToMany('App/User');
    }
    
    public function Performance(){
        return $this->belongTo('App/performance');
    }
    
    public function Posts(){
        return $this->hasMany('App\User');
    }
}
