<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use App\Department;
use App\Performance;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(User $user)
    {
        return view('memberpage')->with(['posts' => $user ->getByUser(), 'user' => $user]);   
    }
    
    public function edit(User $user)
    {
        return view('userEdit')->with(['user' => $user]);
    }
    public function update(Request $request,User $user)
    {
        $input_user = $request['user'];
        $user->fill($input_user)->save();
        return redirect('/memberpage/' . $user->id);
    }
}