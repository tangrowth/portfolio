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
        <h1 class='department_title'>公演編集</h1>
        <div class="performance">
            <form action="/performance/{{ $performance->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class='performance_title'>
                    <h2>タイトル</h2>
                    <input type='text' name='performance[performance]' value="{{ $performance->performance }}">
                </div>
                <div class='performance_story'>
                    <h2>あらすじ</h2>
                    <input type='text' name='performance[story]' value="{{ $performance->story }}">
                </div>
                <div class='performance_date'>
                    <h3>公演日程</h3>
                    <input type='text' name='performance[date]' value="{{ $performance->date }}">
                </div>
                <input type="submit" value="保存">
            </form>
        </div>
        <button onclick="history.back()">戻る</button>
    </body>
</html>
@endsection