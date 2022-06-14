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
        <h1>{{ $department->department }}ホーム</h1>
        <div class="main">
            <div class='left'>
                <h2>一覧</h2>
                    @foreach ($posts as $post)
                        <div class='left_post'>
                            <h3 class='title'>
                                 <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                            </h3>
                            <a href="/performance/{{ $post->performance->id }}">{{ $post->performance->performance }}</a>
                            <div>
                            @if($post->image)
                            <img src={{ $post->image }} class='image'>
                            @endif
                            </div>
                            <p class='body'>{{ $post->body }}</p>
                        </div>
                    @endforeach
            <a class="btn" href='/'>戻る</a>
            </div>
            
            <div class="right">
                <h2>メンバー</h2>
                    @foreach ($users as $user)
                            <div class='right_1'>
                                <img src={{ $user->icon }} class='icon'>
                                <a href="/memberpage/{{ $user->id }}">{{ $user->name }}</a>
                            </div>
                    @endforeach
            </div>
        </div>
    </body>
</html>
@endsection