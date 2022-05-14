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
}