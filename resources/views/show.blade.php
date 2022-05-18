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
            <a href='/department/{{ $department->id }}'>{{ $department->department }}</a>
            <p class='body'>{{ $post->body }}</p>
            @if($user['id'] === auth::id())
                <button onclick="location.href='/posts/{{ $post->id }}/edit'">編集</button>
            @endif
        </div>
        <button onclick="location.href='/'">戻る</button>
    </body>
</html>
@endsection