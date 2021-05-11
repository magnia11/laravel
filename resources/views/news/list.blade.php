@extends('layouts.main')

@section('title')
    @parent
    Список новостей
@endsection

@section('content')
<<<<<<< HEAD
    @forelse($news as $item)
        @php
            $url = route('news::card', ['news' => $item->id])
        @endphp

        <div class="card-title">
            <a href="{{$url}}">{{$item->title}}</a>
=======
    @forelse($news as $id => $item)
        @php
            $url = route('news::card', ['id' => $id])
        @endphp

        <div>
            <a href="{{$url}}">{{$item['title']}}</a>
>>>>>>> main
        </div>
    @empty
        Новостей нет
    @endforelse
@endsection