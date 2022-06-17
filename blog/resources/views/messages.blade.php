@extends('index')

@section('mainTitle')Messages @endsection

@section('main')
    <h1>All Messages</h1>
@foreach($data as $el)
    <div class="alert alert-info">
<h5>{{$el->topic}}</h5>
        <p>{{$el->message}}</p>
        <p><small>{{$el->created_at}}   {{$el->mail}}</small></p>
        <a href="{{route('contact-data-More', $el->id)}}"><button class="btn btn-info">Подробнее</button></a>
    </div>
@endforeach

@endsection
