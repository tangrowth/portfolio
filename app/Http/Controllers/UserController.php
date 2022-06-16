<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use App\Department;
use App\Performance;
use App\Http\Requests\UserRequest;
use Storage;

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
    public function update(UserRequest $request,User $user)
    {
        $input_user = $request['user'];
        $icon = $request->file('icon');
        if($icon){
            $path = Storage::disk('s3')->putFile('myprefix', $icon, 'public');
            $user->icon = Storage::disk('s3')->url($path);
        }
        $user->fill($input_user)->save();
        
        return redirect('/memberpage/' . $user->id);
    }
    
}