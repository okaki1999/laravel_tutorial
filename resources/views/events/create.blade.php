@extends('layouts.default')

@section('title', 'イベント登録')
@section('content')
    <form action="{{ route('events.store') }}" method="POST">
      @csrf
        <div><label>イベント名: <input type="text" name="title"></label></div>
        <button type="submit">登録</button>
    </form>
@endsection