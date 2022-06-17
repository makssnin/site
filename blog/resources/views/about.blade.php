@extends('index')

@section('mainTitle')About @endsection

@section('main')
    <h1>About</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed purus ante. Aliquam ut sapien eu nisl molestie ultricies sit amet posuere velit. Aliquam viverra nisl sed arcu gravida, eu consectetur justo aliquet. Aliquam vitae commodo odio. Maecenas scelerisque metus tortor, ut tempor tortor vestibulum ac. Suspendisse ac nisi magna. Maecenas pellentesque sem suscipit vestibulum ullamcorper. Morbi dignissim ligula quis ultrices laoreet. Quisque eget pretium libero.</p>
<div>
    <div>
        <form class="needs-validation" action="{{route("img-form")}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <x-form-input class="form-label g-2" type="file" name="img" id="img" label="loud image" />
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-large btn-success center-block">submit</button>
            </div>
        </form>
{{--        @isset($path)--}}
{{--           <img class="img-fluid" src="{{asset('/storage/' . $path)}}}">--}}
{{--        @endisset--}}
    </div>

    <div class="photos">
        <div class="photo"></div>
        <div class="photo-original"></div>
        <div class="separator">↔</div>
    </div>
    <div class="toggle-controls">
        <button class="walden" type="button" data-filter="walden"></button>
        <button class="toaster" type="button" data-filter="toaster"></button>
        <button class="kelvin" type="button" data-filter="kelvin"></button>
        <button class="oldie" type="button" data-filter="oldie"></button>
    </div>
</div>

    <script src="/blog/resources/js/script.js"></script>
    <script src="/blog/resources/js/separator.js"></script>




@endsection
