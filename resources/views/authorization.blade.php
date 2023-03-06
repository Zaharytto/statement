@extends('layout.master')

@section('content')
<main class="form-signin w-100 m-auto">
    <form method="post" action="/manager">
        <h1 class="h3 mb-3 fw-normal">Авторизация</h1>
        @csrf
        @if($errors->has('username'))
            <p class="alert alert-danger mt-4">{{$errors->first('username')}}</p>
        @endif
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" name="username" placeholder="Username">
            <label for="floatingInput">Username</label>
        </div>
        @if($errors->has('password'))
            <p class="alert alert-danger mt-4">{{$errors->first('password')}}</p>
        @endif
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Войти</button>
    </form>
</main>
@endsection
