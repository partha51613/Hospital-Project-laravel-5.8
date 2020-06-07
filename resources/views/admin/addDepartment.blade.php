@extends('layouts2.app')
@section('content')


  <div class="containre">

    {!! Form::text($name, $value, [$options]) !!}

  </div>



@endsection
