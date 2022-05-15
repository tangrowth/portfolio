<!DOCTYPE html>
@extends('layouts.app')

@section('content')

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>公演情報</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    
    <body>
        <h1 class='department_title'>{{ $performance->performance }}</h1>
        <div class='information'>
            <h2>情報</h2>
                <div class='story'>
                    <h3>あらすじ</h3>
                    <p>{{ $performance->story}}</p>
                </div>
                <div calss='date'>
                    <h4>公演日程</h4>
                    <p>{{ $performance->date }}</p>
                </div>
                <button onclick="location.href='/performance/{{ $performance->id }}/edit'">編集</button>
        </div>
        <div class='department'>
            <h5>部署</h5>
                @foreach($departments as $department)
                <a href='/department/{{ $department->id }}'>{{ $department->department }}</a>
                @endforeach
        </div>
        <button onclick="history.back()">戻る</button>
    </body>
</html>
@endsection