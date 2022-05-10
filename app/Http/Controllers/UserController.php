<?php

namespace App\Http\Controllers;

use App\Category;
use App\User;
use App\Post;

class UserController extends Controller
{
    public function index(User $user, Post $post)
    {
        $post=$post->get();
        $post=$user::with('Posts')->get();
        dd($post);
        return view('memberpage')->with(['posts' => $post, 'user'=>$user]);
    }
}