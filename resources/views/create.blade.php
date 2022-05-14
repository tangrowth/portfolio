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
        <h1 class='department_title'>新規投稿作成</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="performance">
                <h2>公演</h2>
                <select name="post[performance_id]">
                    @foreach($performances as $performance)
                        <option value="{{ $performance->id }}">{{ $performance->performance }}</option>
                    @endforeach
                </select>
            </div>
            <div class="department">
                <h3>部署</h3>
                <select name="post[department_id]">
                    @foreach($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->department }}</option>
                    @endforeach
                </select>
            </div>
            <div class="title">
                <h4>タイトル</h4>
                <input type="text" name="post[title]" placeholder="タイトル"/>
            </div>
            <div class="body">
                <h5>本文</h5>
                <textarea name="post[body]" placeholder="今日も一日お疲れさまでした"></textarea>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <button onclick="history.back()">戻る</button>
    </body>
</html>
@endsection