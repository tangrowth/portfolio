<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reply extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'body'
        ];
        
    public function User(){
        return $this->belongsTo('App\User');
    }
    
    public function Post(){
        return $this->belongsTo('App\Post');
    }
}
