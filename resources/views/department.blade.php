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
        <h1 class='department_title'>{{ $department->department }}ホーム</h1>
        <div class='posts'>
            <h2>一覧</h2>
                @foreach ($posts as $post)
                    <div class='post'>
                        <h3 class='title'>
                             <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                        </h3>
                        <p class='body'>{{ $post->body }}</p>
                    </div>
                @endforeach
        </div>
        
        <div class='users'>
            <h4>メンバー</h4>
                @foreach ($users as $user)
                    <div class='members'>
                        <p class='member'>
                            <a href="/mypage/{{ $user->id }}">{{ $user->name}}</a>
                        </p>
                    </div>
                @endforeach
        </div>

    </body>
</html>
@endsection