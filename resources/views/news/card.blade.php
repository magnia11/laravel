@extends('layouts.main')

@section('title')
    @parent
<<<<<<< HEAD
    Карточка новости
=======
    Все новости
>>>>>>> main
@endsection
@section('content')

    @php
<<<<<<< HEAD
        $url = route('news::card', [$news->id])
    @endphp
    @if ($news)
    <div>
      <h3>  {{$news['title']}}</h3>
    </div>
    <div>
         {{$news['description']}}
    </div>
    @endif

=======
        $url = route('news::card', 'id')
    @endphp
    @forelse ($news as $item)
    <div>
        {{$item['content']}}
    @empty
            <p>Нет новостей</p>
    @endforelse
    </div>
>>>>>>> main


@endsection