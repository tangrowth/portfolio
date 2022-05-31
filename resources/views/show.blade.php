<!DOCTYPE html>
@extends('layouts.app')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    
    <body>
        <h1 class='department_title'>ホーム</h1>
        <div class='post'>
            <h2 class='title'>
                {{ $post->title }}
            </h2>
            <a href='/performance/{{ $post->performance->id }}'>{{ $post->performance->performance }}</a>
            <a href='/department/{{ $post->department->id }}'>{{ $post->department->department }}</a>
            <div>
                <img src={{ $post->user->icon }} class='icon' style="width: 100px; hight:100px;">
                <a href='/memberpage/{{ $post->user->id }}'>{{ $post->user->name }}</a>
            </div>
            <div>
            <img src={{ $post->image }} class='image' style="width: 1000px; hight:1000px;">
            </div>
            <p class='body'>{{ $post->body }}</p>
            <div>
            <button onclick="location.href='/posts/{{ $post->id }}/reply'">返信</button>
            </div>
            @if($post->user->id === auth::id())
            <div>
                <button onclick="location.href='/posts/{{ $post->id }}/edit'">編集</button>
                <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">削除</button>
                </from>
            </div>
            @endif
        </div>
        <div class="replies">
            @foreach($post->replies as $reply)
            <div class="reply">
                <a href='/memberpage/{{ $reply->user->id }}'>{{ $reply->user->name }}</a>
                <p>{{ $reply->body }}</p>
            </div>
            @endforeach
        </div>
        <button onclick="location.href='/'">戻る</button>
    </body>
</html>
@endsection