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
        
        <div class="main">
            <div class='left'>
            <h2>{{ $user->name }}</h2>
                    @foreach ($posts as $post)
                        <div class='left_post'>
                            <h3>
                                <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                            </h3>
                            <div><a href="/department/{{ $post->department->id }}">{{ $post->department->department }}</a></div>
                            <div>
                            @if($post->image)
                            <img src={{ $post->image }} class='image'>
                            @endif
                            </div>
                            <div class="left_body">
                                <p class='body'>{{ $post->body }}</p>
                            </div>
                        </div>
                    @endforeach
                <a class="btn" href='/'>戻る</a>
            </div>
            <div class='right'>
                <h2>プロフィール</h2>
                <div class="right_1">
                <img src={{ $user->icon }} class='icon'>
                    <p>{{ $user->age }}</p>
                    <p>{{ $user->comment }}</p>
                    @if($user->id === auth::id())
                        <a class="left_btn" href='/memberpage/{{ $user->id }}/edit'>編集</a>
                    @endif
                </div>
            </div>
        </div>
    </body>
</html>
@endsection