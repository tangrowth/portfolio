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
        <div class="main">
            <div class='left'>
                <div class='show_post'>
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
                    @if($post->image)
                    <img src={{ $post->image }} class='image'>
                    @endif
                    </div>
                    <p class='body'>{{ $post->body }}</p>
                </div>
                <div>
                @if($post->user->id === auth::id())
                    <a class="btn" href='/posts/{{ $post->id }}/edit'>編集</a>
                    <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" name="delete" method="post" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <a href="#" class="btn" onclick="document.delete.submit()">削除</a>
                    </from>
                @endif
                <a class="btn" href='/'>戻る</a>
                <a class="btn" href='/posts/{{ $post->id }}/reply'>返信</a>
                </div>
            </div>
            <div class="right">
                <h2>返信</h2>
                @foreach($post->replies as $reply)
                <div class="right_1">
                    <a href='/memberpage/{{ $reply->user->id }}'>{{ $reply->user->name }}</a>
                    <p>{{ $reply->body }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </body>
</html>
@endsection