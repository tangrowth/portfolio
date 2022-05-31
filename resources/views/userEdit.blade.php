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
        <h1 class='department_title'>プロフィール編集</h1>
        <div class="content">
            <form action="/memberpage/{{ $user->id }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class="icon">
                    <h2>アイコン</h2>
                    <input type="file" name='icon'>
                </div>
                <div class='user_name'>
                    <h3>名前</h3>
                    <input type='text' name='user[name]' value="{{ $user->name }}">
                </div>
                <div class='user_age'>
                    <h4>年</h4>
                    <input type='text' name='user[age]' value="{{ $user->age }}">
                </div>
                <div class='user_comment'>
                    <h5>コメント</h5>
                    <textarea name="user[comment]" placeholder="今日も一日お疲れさまでした。" ><?php print($user["comment"]); ?></textarea>
                </div>
                <input type="submit" value="保存">
            </form>
        </div>
        <button onclick="history.back()">戻る</button>
    </body>
</html>
@endsection