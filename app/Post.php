<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    'title',
    'body',
    'performance_id',
    'department_id'
];

    public function getByLimit(int $limit_count = 10)
    {
        return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }
    public function User(){
        return $this->belongsTo('App\User');
    }
    
    public function Department(){
        return $this->belongsTo('App\Department');
    }
    
    public function Performance(){
        return $this->belongsTo('App\performance');
    }
}
