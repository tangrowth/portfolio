<!DOCTYPE html>
@extends('layouts.app')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mypage</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    
    <body>
        <h1 class='department_title'>{{ $user->name }}</h1>
        <p href="/mypage/{{ $user->id }}">{{ $user->name }}</p>
        
        <div class='profile'>
            <p class='icon'>{{ $user->icon }}</p>
            <p class='age'>{{ $user->age }}</p>
            <p class='comment'>{{ $user->comment }}</p>
        </div>
        
        <div class='posts'>
            <h2>一覧</h2>
                @foreach ($posts as $post)
                    <div class='post'>
                        <h3 class='title'>{{ $post->title }}</h3>
                        <p class='body'>{{ $post->body }}</p>
                    </div>
                @endforeach
        </div>
        
        <div class='menu'>
            <a href="/">ホーム</a>
            @foreach ($departments as $department)
                <div class='dep_menu'>
                    <a href="/departments/{{ $department->id }}">{{ $department->department }}</a>
                </div>
            @endforeach
        </div>
    </body>
</html>
@endsection