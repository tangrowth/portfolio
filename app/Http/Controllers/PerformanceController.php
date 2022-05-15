<?php

namespace App\Http\Controllers;

use App\Department;
use App\Performance;
use App\User;
use Auth;
use Illuminate\Http\Request;

class PerformanceController extends Controller
{
    public function create(Performance $performance)
    {
        return view('createPerformance')->with(['performances' => $performance->get()]);
    }
    
    public function store(Performance $performance, Request $request)
    {
        $input = $request['performance'];
        $performance->fill($input)->save();
        return redirect('/');
    }
    
    public function index(Performance $performance, User $user, Department $department)
    {
        return view('performance')->with(['departments' => $department ->department($performance->id), 'performance'=>$performance]);
    }
    
    public function edit(Performance $performance)
    {
        return view('performanceEdit')->with(['performance' => $performance]);
    }
    
    public function update(Request $request, Performance $performance)
    {
        $input_performance = $request['performance'];
        $performance->fill($input_performance)->save();
        return redirect('/performance/' . $performance->id);
        
    }
}