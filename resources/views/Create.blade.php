@extends('Base')

@section('content')
  <h1>Create</h1>
  {!! Form::open(['route' => 'store']) !!}
  @include('_form')
  {!! Form::close()!!}
@endsection