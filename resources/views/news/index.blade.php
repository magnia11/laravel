@extends('layouts.main')

@section('title')
    @parent
    Главная
@endsection

@section('content')
   @foreach($categories as $id => $name)
    @php
        $url = route('news::list', ['categoryId' => $id])
    @endphp

<<<<<<< HEAD
    <div class="card-title">
=======
    <div>
>>>>>>> main
        <a href="{{$url}}">{{$name}}</a>
    </div>

@endforeach
@endsection