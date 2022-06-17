@extends('index')


@section('mainTitle')Main @endsection


@section('main')
    <h1>Test site on Laravel</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed purus ante. Aliquam ut sapien eu nisl molestie ultricies sit amet posuere velit. Aliquam viverra nisl sed arcu gravida, eu consectetur justo aliquet. Aliquam vitae commodo odio. Maecenas scelerisque metus tortor, ut tempor tortor vestibulum ac. Suspendisse ac nisi magna. Maecenas pellentesque sem suscipit vestibulum ullamcorper. Morbi dignissim ligula quis ultrices laoreet. Quisque eget pretium libero.</p>
@endsection


@section('aside')
    @parent
    <p>Дополнительный текст Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed purus ante. Aliquam ut sapien eu nisl molestie ultricies sit amet posuere velit. Aliquam viverra nisl sed arcu gravida, eu consectetur justo aliquet. Aliquam vitae commodo odio. Maecenas scelerisque metus tortor, ut tempor tortor vestibulum ac.</p>

@endsection

