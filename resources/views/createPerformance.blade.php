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
        <h1 class='department_title'>公演作成</h1>
        <form action="/performance" method="POST">
            @csrf
            <div class="performance">
                <h2>公演</h2>
                    <input type="text" name="performance[performance]" placeholder="公演名を入力してください"/>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <button onclick="location.href='/'">戻る</button>>
    </body>
</html>
@endsection