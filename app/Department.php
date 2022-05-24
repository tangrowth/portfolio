<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
    'department'
    ];
    
    public function getByDepartment(int $limit_count = 10)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    
    public function department($performance_id)
    {
        return $this->where('performance_id', $performance_id)->get();
    }
    
    public function User(){
        return $this->belongsToMany('App/User');
    }
    
    public function Performance(){
        return $this->belongsToMany('App/performance');
    }
    
    public function Posts(){
        return $this->hasMany('App\Post');
    }
}
