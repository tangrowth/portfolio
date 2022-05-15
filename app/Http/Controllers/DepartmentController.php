<?php

namespace App\Http\Controllers;

use App\Department;
use App\Performance;
use App\User;
use Auth;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    
    public function index(Department $department, User $user,Performance $performance)
    {
        $posts = $department->posts()->get();
        $users = $user->all();
        return view('department', compact('posts','users', 'department'))->with(['performance' => $performance ->first()]);
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
}