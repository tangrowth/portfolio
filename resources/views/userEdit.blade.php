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
        <h1>プロフィール編集</h1>
            <form action="/memberpage/{{ $user->id }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class='create'>
                    <h2>アイコン</h2>
                    <input type="file" name='icon'>
                </div>
                <div class='create'>
                    <h2>名前</h2>
                    <input type='text' name='user[name]' value="{{ $user->name }}">
                </div>
                <div class='create'>
                    <h2>年</h2>
                    <input type='text' name='user[age]' value="{{ $user->age }}">
                </div>
                <div class='create'>
                    <h2>コメント</h2>
                    <textarea name="user[comment]" placeholder="今日も一日お疲れさまでした。" ><?php print($user["comment"]); ?></textarea>
                </div>
                <input type="submit" value="保存" class="btn">
        <button onclick="history.back()" class="btn">戻る</button>
            </form>
        </div>
    </body>
</html>
@endsection