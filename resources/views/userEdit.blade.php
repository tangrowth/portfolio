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
            <form action="/memberpage/{{ $user->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class='user_name'>
                    <h2>名前</h2>
                    <input type='text' name='user[name]' value="{{ $user->name }}">
                </div>
                <div class='user_age'>
                    <h3>年</h3>
                    <input type='text' name='user[age]' value="{{ $user->age }}">
                </div>
                <div class='user_comment'>
                    <h4>コメント</h4>
                    <input type='text' name='user[comment]' value="{{$user->comment }}">
                </div>
                <input type="submit" value="保存">
            </form>
        </div>
        <button onclick="history.back()">戻る</button>
    </body>
</html>
@endsection