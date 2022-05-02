<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Department;

class PostController extends Controller
{

    public function index(Post $post,User $user,Department $department)
    {
        return view('home')->with(['posts' => $post->get(),'users' => $user->get(),'departments' => $department->get()]);
    }
    
    public function memberpage(Post $post,User $user,Department $department)
    {
        return view('mypage')->with(['posts' => $post->get(),'user' => $user,'departments' => $department->get()]);
    }
 
 
}