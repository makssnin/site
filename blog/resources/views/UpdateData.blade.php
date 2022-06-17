@extends('index')

@section('mainTitle')Update @endsection

@section('main')
    <h1>Обновление записи</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed purus ante. Aliquam ut sapien eu nisl molestie ultricies sit amet posuere velit. Aliquam viverra nisl sed arcu gravida, eu consectetur justo aliquet. Aliquam vitae commodo odio. Maecenas scelerisque metus tortor, ut tempor tortor vestibulum ac. Suspendisse ac nisi magna. Maecenas pellentesque sem suscipit vestibulum ullamcorper. Morbi dignissim ligula quis ultrices laoreet. Quisque eget pretium libero.</p>
    <div class="container">
        <form class="needs-validation" action="{{ route('contact-form-update-saved', $data->id) }}" method="post">
            @csrf

            <div class="row">
                <label class="form-label g-2" for="name">input name</label>
                <input class="form-control" value="{{$data->name}}" type="text" name="name" id="name" placeholder="input name">
            </div>
            <div class="row">
                <label class="form-label g-2" for="email">input email</label>
                <input class="form-control" value="{{$data->mail}}" type="email" name="email" id="email" placeholder="input email">
            </div>
            <div class="row">
                <label class="form-label g-2" for="company">input company</label>
                <input class="form-control" value="{{$data->company}}" type="text" name="company" id="company" placeholder="input company">
            </div>
            <div class="row">
                <label class="form-label g-2" for="topic">input topic</label>
                <input class="form-control" value="{{$data->topic}}" type="text" name="topic" id="topic" placeholder="input topic">
            </div>
            <div class="row">
                <label class="form-label g-2" for="message">input message</label>
                <textarea class="form-control" name="message" id="message" placeholder="input message">{{$data->message}}</textarea>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-success">Updated</button>

            </div>
        </form>
    </div>
@endsection


