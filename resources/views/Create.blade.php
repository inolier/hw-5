@extends('Base')

@section('con')
  <h1>Create</h1>
  {!! Form::open(['route' => 'store']) !!}
  @include('_form')
  {!! Form::close()!!}
@endsection