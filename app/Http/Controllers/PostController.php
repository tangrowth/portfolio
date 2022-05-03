<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Department;
use App\Performance;

class PostController extends Controller
{

    public function index(Post $post,User $user,Department $department,Performance $performance)
    {
        return view('index')->with(['posts' => $post->getByLimit(),'users' => $user->get(),'departments' => $department->get(),'performance' => $performance->get()]);
    }
    
    public function memberpage(Post $post,User $user,Department $department)
    {
        return view('memberpage')->with(['posts' => $post->get(),'user' => $user,'departments' => $department->get()]);
    }
 
 
}