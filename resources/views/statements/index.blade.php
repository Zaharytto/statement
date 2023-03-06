@extends('layout.master')

@section('content')
<main class="form-signin w-100 m-auto">

  @foreach ($clients as $client1)
    @foreach ($client1 as $client)
      <div class="card">
        <div class="card-header">Client</div>
        <div class="card-body">
          <h5 class="card-title">{{ $client->name }} {{ $client->lastName }}</h5>
          <p class="card-text">{{ $client->phone }}</p>
          <p class="card-text">{{ $client->email }}</p>
          <hr>
          <h5 class="card-title">Комментарий</h5>
          @if ($client->comment)
          <p>{{ $client->comment }}</p>
          @else
          <p>-//-</p>
          @endif
          <a href="home/{{ $client->id }}/edit" class="btn btn-primary">Комментировать</a>
        </div>
      </div>
    @endforeach
  @endforeach
</main>
@endsection