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
        <h1 class='department_title'>部署作成</h1>
        <form action="/department" method="POST">
            @csrf
            <div class="performance">
                <h2>公演</h2>
                <select name="department[performance_id]">
                    {{--@foreach($performances as $performance)--}}
                        <option value="1">1</option>
                    {{--@endforeach--}}
                </select>
            </div>
            <div class="department">
                <h3>部署</h3>
                <input type="text" name="department[department]" placeholder="部署名を入力してください"/>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">ホーム</a>]</div>
    </body>
</html>
@endsection