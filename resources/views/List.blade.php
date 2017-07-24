@extends('Base')

@section('con')
  @foreach ($lists as $list)
    <h2>{{ $list->name}} </h2>
    <p> {{ $list->surname }}  </p>
    <p> {{  $list->email }}</p>
  @endforeach
@endsection