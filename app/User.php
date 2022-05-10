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
        'name', 'email', 'password',
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
        return $this->hasMany('App\department');
    }
    
    public function Performance(){
        return $this->belongTo('App\performance');
    }
    
    public function getByCategory(int $limit_count = 5)
    {
         return $this->posts()->with('user')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }

    public function test()
    {
        return $this->get();
    }
}
