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
        <h1 class='department_title'>{{ $performance->performance }}{{ $department->department }}ホーム</h1>
        <div class='posts'>
            <h2>一覧</h2>
                @foreach ($posts as $post)
                    <div class='post'>
                        <h3 class='title'>
                             <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                        </h3>
                        <p>{{ $post->performance->performance }}</p>
                        <p class='body'>{{ $post->body }}</p>
                    </div>
                @endforeach
        </div>
        
        <button onclick="location.href='/'">戻る</button>
    </body>
</html>
@endsection