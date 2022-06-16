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
        <div class="center">
        <h1 class='page_title'>投稿編集</h1>
            <form action="/posts/{{ $post->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class='create'>
                    <h2>タイトル</h2>
                    <input type='text' name='post[title]' value="{{ $post->title }}">
                </div>
                <div class='create'>
                    <h2>本文</h2>
                    <textarea name="post[body]" placeholder="今日も一日お疲れさまでした。" ><?php print($post["body"]); ?></textarea>
                </div>
                <input class="btn" type="submit" value="保存">
        <button class="btn" onclick="history.back()">戻る</button>
            </form>
        </div>
    </body>
</html>
@endsection