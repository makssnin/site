@extends('index')

@section('mainTitle'){{$data->topic}} @endsection

@section('main')
    <h1>Messages {{$data->topic}}</h1>

        <div class="alert alert-info">
            <h5>{{$data->topic}}</h5>
            <p>{{$data->message}}</p>
            <p><small>{{$data->created_at}}   {{$data->mail}}</small></p>
            <a href="{{route('contact-data-update', $data->id)}}"><button class="btn btn-primary">Изменить</button></a>
            <a href="{{route('contact-data-deleted', $data->id)}}"><button type="submit" class="btn btn-danger">Deleted</button></a>
        </div>


@endsection
