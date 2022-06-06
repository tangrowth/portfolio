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
        <din class="header">
            <h1 class='page_title'>ホーム</h1>
            <a href="/posts/create" class="header_btn">作成</a>
        </div>
        <div class="left">
            <h2>一覧</h2>
                @foreach ($posts as $post)
                    <div class='left_post'>
                        <h3>
                             <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                        </h3>
                        <div><a href="/department/{{ $post->Department->id }}">{{ $post->Department->department }}</a></div>
                        <img　class="icon" src={{ $post->user->icon }} class='icon' style="width: 100px; hight:100px;">
                        <a href='/memberpage/{{ $post->user->id }}'>{{ $post->user->name }}</a>
                        <p class='left_body'>{{ $post->body }}</p>
                    </div>
                @endforeach
        </div>
        
            <div class="right">
                <h2>メンバー</h2>
                    @foreach ($users as $user)
                        <div class='right_1'>
                            <img class="icon" src={{ $user->icon }} class='icon' style="width: 100px; hight:100px;">
                            <a href="/memberpage/{{ $user->id }}">{{ $user->name }}</a>
                        </div>
                    @endforeach
                
                <h2>公演</h2>
                    <div class='right_1'>
                        @foreach($performances as $performance)
                            <div class='performance'>
                                <a href="/performance/{{ $performance->id }}">{{ $performance->performance }}</a>
                            </div>
                        @endforeach
                    </div>
            </div>
        </div>
        </body>
    </div>
</html>
@endsection