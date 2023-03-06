@extends('layout.master')

@section('content')

<main class="form-signin w-100 m-auto">
    <form id="form-create-user" method="post" action="/">
        @csrf


        <h1 class="h3 mb-3 fw-normal">Оставьте заявку</h1>
        @if($errors->has('email'))
            <p class="alert alert-danger mt-4">{{$errors->first('email')}}</p>
        @endif
        <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" required>
            <label for="floatingInput">Ваш email</label>
        </div>
        @if($errors->has('name'))
            <p class="alert alert-danger mt-4">{{$errors->first('name')}}</p>
        @endif
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" name="name" placeholder="name" required>
            <label for="floatingInput">Имя</label>
        </div>
        @if($errors->has('lastName'))
            <p class="alert alert-danger mt-4">{{$errors->first('lastName')}}</p>
        @endif
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" name="lastName" placeholder="lastName" required>
            <label for="floatingInput">Фамилия</label>
        </div>
        @if($errors->has('phone'))
            <p class="alert alert-danger mt-4">{{$errors->first('phone')}}</p>
        @endif
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" name="phone" placeholder="phone" required>
            <label for="floatingInput">Телефон</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Отправить</button>
    </form>
</main>

@endsection
