<?php

namespace App\Http\Controllers;

use App\Category;
use App\User;
use App\Post;
use App\Department;
use App\Performance;

class UserController extends Controller
{
    public function index(User $user, Post $post, Department $department, Performance $performance)
    {
        $post=$post->get();
        $post=$user::with('Posts')->get();
        dd($post);
        return view('memberpage')->with(['posts' => $post, 'user'=>$user, 'department'->$department, 'performance'->$performance]);
    }
}