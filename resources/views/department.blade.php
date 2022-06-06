<!DOCTYPE html>
@extends('layouts.app')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <title>Home</title>
    </head>
    
    <body>
        <div class="header">
            <h1 class='page_title'>{{ $department->department }}ホーム</h1>
        </div>
        <div class='left'>
            <h2>一覧</h2>
                @foreach ($posts as $post)
                    <div class='left_post'>
                        <h3 class='title'>
                             <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                        </h3>
                        <p>{{ $post->performance->performance }}</p>
                        <p class='body'>{{ $post->body }}</p>
                    </div>
                @endforeach
        </div>
        
        <div class="right">
            <h4>メンバー</h4>
                @foreach ($users as $user)
                        <div class='right_1'>
                            <img src={{ $user->icon }} class='icon' style="width: 100px; hight:100px;">
                            <a href="/mypage/{{ $user->id }}">{{ $user->name}}</a>
                        </div>
                @endforeach
        </div>
        <button class="btn" onclick="location.href='/'">戻る</button>
    </body>
</html>
@endsection