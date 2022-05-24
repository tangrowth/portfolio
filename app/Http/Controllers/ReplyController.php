<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Reply;
use Auth;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    
    public function reply(Post $post, User $user,Reply $reply)
    {
        return view('reply')->with(['post'=> $post, 'user'=> $user ->get(), 'reply'=> $reply ->get()]);
    }
    
    public function store(Request $request, Reply $reply, $post)
    {
        $reply->user_id = Auth::id();
        $reply->post_id = $post;
        $input = $request['reply'];
        $reply->fill($input)->save();
        return redirect('/posts/' . $post);
    }
}