@extends('Base')

@section('content')
  @foreach ($clients as $client)
    <h2>{{ $client->name}} </h2>
    <p> {{ $client->surname }}  </p>
    <p> {{  $client->email }}</p>
  @endforeach
@endsection