@extends('index')

@section('mainTitle')Contacts @endsection

@section('main')
    <h1>Contacts</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed purus ante. Aliquam ut sapien eu nisl molestie ultricies sit amet posuere velit. Aliquam viverra nisl sed arcu gravida, eu consectetur justo aliquet. Aliquam vitae commodo odio. Maecenas scelerisque metus tortor, ut tempor tortor vestibulum ac. Suspendisse ac nisi magna. Maecenas pellentesque sem suscipit vestibulum ullamcorper. Morbi dignissim ligula quis ultrices laoreet. Quisque eget pretium libero.</p>
<div class="container">
    <form class="needs-validation" action="{{ route('contact-form') }}" method="post">
    @csrf

        <div class="row">
{{--    <label class="form-label g-2" for="name">input name</label>--}}
<x-form-input class="form-label g-2" type="text" name="name" id="name" placeholder="input name" label="input name" />
{{--    <input class="form-control" type="text" name="name" id="name" placeholder="input name">--}}
        </div>
        <div class="row">
<x-form-input class="form-label g-2" type="email" name="email" id="email" placeholder="input email" label="input email" />
{{--    <label class="form-label g-2" for="email">input email</label>--}}
{{--    <input class="form-control" type="email" name="email" id="email" placeholder="input email">--}}
        </div>
        <div class="row">
 <x-form-input class="form-label g-2" type="text" name="company" id="company" placeholder="input company" label="input company" />
{{--    <label class="form-label g-2" for="company">input company</label>--}}
{{--    <input class="form-control" type="text" name="company" id="company" placeholder="input company">--}}
        </div>
        <div class="row">
 <x-form-input class="form-label g-2" type="text" name="topic" id="topic" placeholder="input topic" label="input topic" />
{{--    <label class="form-label g-2" for="topic">input topic</label>--}}
{{--    <input class="form-control" type="text" name="topic" id="topic" placeholder="input topic">--}}
        </div>
        <div class="row">
<x-form-textarea class="form-label g-2" name="message" id="message" placeholder="input message" label="input message" />
{{--    <label class="form-label g-2" for="message">input message</label>--}}
{{--    <textarea class="form-control" name="message" id="message" placeholder="input message"></textarea>--}}
        </div>
        <div class="mt-3">
        <button type="submit" class="btn btn-large btn-success center-block">submit</button>
        </div>
       </form>
</div>
@endsection


