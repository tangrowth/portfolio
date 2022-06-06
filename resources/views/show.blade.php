<!DOCTYPE html>
@extends('layouts.app')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <title>Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    
    <body>
        <div class="header">
            <h1 class='page_title'>ホーム</h1>
        <button class="header_btn" onclick="location.href='/'">戻る</button>
        </div>
        <div class='left'>
            <h2>
                {{ $post->title }}
            </h2>
            <a href='/performance/{{ $post->performance->id }}'>{{ $post->performance->performance }}</a>
            <a href='/department/{{ $post->department->id }}'>{{ $post->department->department }}</a>
            <div>
                <img src={{ $post->user->icon }} class='icon'>
                <a href='/memberpage/{{ $post->user->id }}'>{{ $post->user->name }}</a>
            </div>
            <div>
            <img src={{ $post->image }} class='image'>
            </div>
            <p class='body'>{{ $post->body }}</p>
            <div>
            <button class="btn" onclick="location.href='/posts/{{ $post->id }}/reply'">返信</button>
            </div>
            @if($post->user->id === auth::id())
            <div>
                <button class="btn" onclick="location.href='/posts/{{ $post->id }}/edit'">編集</button>
                <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn" type="submit">削除</button>
                </from>
            </div>
            @endif
        </div>
        <div class="right">
            @foreach($post->replies as $reply)
            <div class="right_1">
                <a href='/memberpage/{{ $reply->user->id }}'>{{ $reply->user->name }}</a>
                <p>{{ $reply->body }}</p>
            </div>
            @endforeach
        </div>
    </body>
</html>
@endsection