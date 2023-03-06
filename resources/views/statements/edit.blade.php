@extends('layout.master')

@section('content')
<main class="form-signin w-100 m-auto">
  <form action="/home/{{ $client->id }}" method="post">
    @csrf
    @method("PATCH")
    <input type="hidden" value="{{ $client->id }}" name="id">
    <div class="card">
      <div class="card-header">Client</div>
      <div class="card-body">
        <h5 class="card-title">{{ $client->name }} {{ $client->lastName }}</h5>
        <p class="card-text">{{ $client->phone }}</p>
        <p class="card-text">{{ $client->email }}</p>
        <hr>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="comment" >{{ $client->comment }}</textarea>
            <label for="floatingTextarea">Комментарий</label>
        </div>
        <button class="btn btn-primary">Комментировать</button>
        {{-- <a href="/home" class="btn btn-primary">Комментировать</a> --}}
      </div>
    </div>
  </form>
</main>
@endsection