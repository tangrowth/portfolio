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
        <div class="header">
            <h1 class='page_title'>新規投稿作成</h1>
        </div>
        <div class="main">
            <form action="/posts" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="create">
                    <h2>公演</h2>
                    <select name="post[performance_id]">
                        @foreach($performances as $performance)
                            <option value="{{ $performance->id }}">{{ $performance->performance }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="create">
                    <h2>部署</h2>
                    <select name="post[department_id]">
                        @foreach($departments as $department)
                            <option value="{{ $department->id }}">{{ $department->department }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="create">
                    <h2>タイトル</h2>
                    <input type="text" name="post[title]" placeholder="タイトル"/>
                </div>
                <div class="create">
                    <h2>本文</h2>
                    <textarea name="post[body]" placeholder="今日も一日お疲れさまでした"></textarea>
                </div>
                <div class="create">
                    <h2>画像</h2>
                    <input type="file" name="image">
                </div>
                <input class="btn" type="submit" value="保存"/>
            </form>
            <button　class="btn" onclick="history.back()">戻る</button>
        </div>
    </body>
</html>
@endsection