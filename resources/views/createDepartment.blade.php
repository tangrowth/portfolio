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
            <h1 class='page_title'>部署作成</h1>
            <form action="/department" method="POST">
                @csrf
                <div class="create">
                    <h2>部署</h2>
                    <input type="text" name="department[department]" placeholder="部署名を入力してください"/>
                </div>
                <input class="btn" type="submit" value="保存"/>
            <button　class="btn" onclick="location.href='/'">戻る</button>
            </form>
        </div>
    </body>
</html>
@endsection