@extends('layouts.default')

@section('title', 'さぁ、はじめよう！')
@section('content')
<form action="/query-strings" method="get">
    @csrf
    <label>キーワード<input type="text" name ="keyword" ></label>
    <button type="submit">送信</button>
@endsection