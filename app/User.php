<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','age','comment','icon'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function Posts(){
        return $this->hasMany('App\Post');
    }
    
    public function Departments(){
        return $this->belongsToMany('App\department');
    }
    
    public function Performance(){
        return $this->belongsToMany('App\performance');
    }
    public function Replies(){
        return $this->hasMany('App\Reply');
    }
    
    public function getByUser(int $limit_count = 10)
    {
         return $this->posts()->with('user')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }

}
