
@extends('index')

@section('mainTitle')Registration @endsection

@section('center')


    <div class="container" style="width: 300px; text-align: center;">
        <form class="needs-validation" action="{{ route('RegistrationSubmit') }}" method="post" style="width: 300px; text-align: center;">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <x-form-input class="form-label g-2" type="text" name="name" id="name" placeholder="input name" label="input name" />
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            @error('email')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            @error('password')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
            <div class="form-floating">
                <input type="password" class="form-control" id="Password" name="password_confirmation" placeholder="Password">
                <label for="Password">repeat Password</label>
            </div>
            @error('password')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Show password
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        </form>
    </div>
@endsection
