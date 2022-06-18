@extends('index')

@section('mainTitle')Authorized @endsection

@section('center')


    <div class="container" style="width: 300px; text-align: center;">
        <form class="needs-validation" action="{{ route('loginSubmit') }}" method="post" style="width: 300px; text-align: center;">
            @csrf
                <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

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
            <div>
                <a href="" class="font-medium text-blue-900 hover:bg-blue-300 rounded-md p-2">Забыли пароль?</a>
            </div>
            <div>
                <a href="{{route("registration")}}" class="font-medium text-blue-900 hover:bg-blue-300 rounded-md p-2">Регистрация</a>
            </div>
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            </form>
    </div>
@endsection
