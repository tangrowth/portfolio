<!DOCTYPE html>
@extends('layouts.app')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <title>Mypage</title>
    </head>
    
    <body>
        <div class="header">
            <h1 class='page_title'>{{ $user->name }}</h1>
        </div>
        
        <div class='left'>
            <h2>一覧</h2>
                @foreach ($posts as $post)
                    <div class='left_post'>
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                        <div><a href="/department/{{ $post->department->id }}">{{ $post->department->department }}</a></div>
                        <div class="left_body">
                            <p class='body'>{{ $post->body }}</p>
                        </div>
                    </div>
                @endforeach
        <button class="btn" onclick="location.href='/'">戻る</button>
        </div>
        <div class='right'>
            <h2>{{ $user->name }}</h2>
            <div class="right_1">
            <img src={{ $user->icon }} class='icon'>
                <p>{{ $user->age }}</p>
                <p>{{ $user->comment }}</p>
                @if($user->id === auth::id())
                    <button class="btn"onclick="location. href='/memberpage/{{ $user->id }}/edit'">編集</button>
                @endif
            </div>
        </div>
    </body>
</html>
@endsection