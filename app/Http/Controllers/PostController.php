<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Department;
use App\Performance;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index(Post $post,User $user,Department $department,Performance $performance)
    {
        $posts = $post->getByLimit();
        return view('index')->with(['posts' => $posts,'users' => $user->get(),'departments' => $department->get(),'performances' => $performance->get()]);
    }
 
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function edit(Post $post)
    {
        return view('edit')->with(['post' => $post]);
    }
    public function update(Request $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();
    
        return redirect('/posts/' . $post->id);
    }
    
    public function show(Post $post, User $user,Department $department,Performance $performance)
    {
        return view('show')->with(['post' => $post, 'user'=> $user->first(),'department' => $department->first(),'performance' => $performance->first()]);
    }
    
    public function create(Post $post,User $user,Department $department,Performance $performance)
    {
        return view('create')->with(['posts' => $post->getByLimit(),'departments' => $department->get(),'performances' => $performance->get()]);
    }
    
    public function store(Request $request, Post $post)
    {
        $post->user_id = Auth::id();
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
}