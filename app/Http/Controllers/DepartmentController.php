<?php

namespace App\Http\Controllers;

use App\Category;

class DepartmentController extends Controller
{
    public function index(Department $department)
    {
        return view('departments.index')->with(['posts' => $department->getByCategory()]);
    }
}