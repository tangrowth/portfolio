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
        <div class='center'>
            <h2>{{ $performance->performance }}{{ $department->department }}</h2>
                @foreach ($posts as $post)
                    <div class='create'>
                        <h2>
                             <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                        </h2>
                        <img　class="icon" src={{ $post->user->icon }} class='icon'>
                        <a href="/memberpage/{{ $post->user->id }}">{{ $post->user->name }}</a>
                        <p>{{ $post->body }}</p>
        <div><a class='test' href='/'>戻る</a></div>
                    </div>
                @endforeach
        </div>
        
    </body>
</html>
@endsection