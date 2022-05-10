<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    'title',
    'body',
    'performances_id',
    'departments_id'
];

    public function getByLimit(int $limit_count = 10)
    {
        return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }
    public function User(){
        return $this->belongTo('App\User');
    }
    
    public function Department(){
        return $this->belongTo('App\department');
    }
    
    public function Performance(){
        return $this->belongTo('App\performance');
    }
}
