<?php

namespace App\Http\Controllers;

use App\Department;
use App\Performance;
use App\User;
use App\Post;
use Auth;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    
    public function index(Department $department, User $user,Performance $performance)
    {
        $posts = $department->posts()->get();
        $users = $user->all();
        return view('department', compact('posts','users', 'department'));
    }
    
    public function store(Department $department, Request $request)
    {
        $input = $request['department'];
        $department->fill($input)->save();
        Auth::user()->departments()->attach($department);
        return redirect('/');
    }
    
    public function create(Department $department, Performance $performance)
    {
        return view('createDepartment')->with(['departments' => $department->get(),'performances' => $performance->get()]);
    }
    
    public function relatedPerfomanceIndex(Post $post, Performance $performance, Department $department)
    {
        $posts = $post->where('department_id', $department->id)->where('performance_id', $performance->id)->get();
        return view('relatedPerformanceIndex', compact('posts','performance','department'));
    }
}