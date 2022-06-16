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
            <h1 class='page_title'>公演編集</h1>
            <form action="/performance/{{ $performance->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class='create'>
                    <h2>タイトル</h2>
                    <input type='text' name='performance[performance]' value="{{ $performance->performance }}">
                </div>
                <div class='create'>
                    <h2>あらすじ</h2>
                    <input type='text' name='performance[story]' value="{{ $performance->story }}">
                </div>
                <div class='create'>
                    <h2>公演日程</h2>
                    <input type='text' name='performance[date]' value="{{ $performance->date }}">
                </div>
                <input class='btn' type="submit" value="保存">
            <button class='btn' onclick="location.href='/'">戻る</button>
            </form>
        </div>
    </body>
</html>
@endsection