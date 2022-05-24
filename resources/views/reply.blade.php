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
        <h1 class='department_title'>返信作成</h1>
        <div class="post">
                <h2>{{ $post->title }}</h2>
            <a href='/memberpage/{{ $post->user->id }}'>{{ $post->user->name }}</a>
            <p>{{ $post->body }}</p>
            </div>
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            <div class="reply">
                <h3>返信</h3>
                <textarea name="reply[body]" placeholder="今日も一日お疲れさまでした"></textarea>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <button onclick="history.back()">戻る</button>
    </body>
</html>
@endsection