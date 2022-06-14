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
        <h1>返信作成</h1>
        <div class="main">
            <div class="left">
                <div class="left_post">
                <h2>{{ $post->title }}</h2>
                <img src={{ $post->user->icon }} class='icon'>
                <a href='/memberpage/{{ $post->user->id }}'>{{ $post->user->name }}</a>
                <div class="image">
                    @if($post->image){
                    <img src={{ $post->image }} class='image'>
                    }
                    @endif
                </div>
                <p>{{ $post->body }}</p>
                </div>
            </div>
            <div class="right">
                <form action="/posts/{{ $post->id }}" method="POST">
                    @csrf
                        <h2>返信</h2>
                    <div class="right_1">
                        <textarea name="reply[body]" placeholder="今日も一日お疲れさまでした"></textarea>
                    </div>
                    <input class="btn" type="submit" value="保存"/>
                </form>
            </div>
        </div>
    </body>
</html>
@endsection