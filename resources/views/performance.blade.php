<!DOCTYPE html>
@extends('layouts.app')

@section('content')

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <title>公演情報</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    
    <body>
        <div class="header">
            <h1 class='page_title'>{{ $performance->performance }}</h1>
            <button class='header_btn' onclick="location.href='/'">戻る</button>
            <button class='header_btn' onclick="location.href='/performance/{{ $performance->id }}/edit'">編集</button>
        </div>
        <div class='left'>
            <h2>情報</h2>
                <div class='left_post'>
                    <h3>あらすじ</h3>
                    <p>{{ $performance->story}}</p>
                </div>
                <div class='left_post'>
                    <h3>公演日程</h3>
                    <p>{{ $performance->date }}</p>
                </div>
        </div>
        <div class='right'>
            <h2>部署</h2>
            <div class='right_1'>
                @foreach($departments as $department)
                <a href='/performance/{{ $performance->id }}/department/{{ $department->id }}'>{{ $department->department }}</a>
                @endforeach
            </div>
        </div>
    </body>
</html>
@endsection