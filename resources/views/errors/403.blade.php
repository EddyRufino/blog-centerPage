@extends('layout')

@section('content')

  <section class="pages container">
    <div class="page page-about">

      <h1 class="text-capitalize">Te perdiste - Página no autorizada </h1>
      <span style="color:red">{{ $exception->getMessage() }}</span>

      <p><a href="{{ url()->previous() }}">Vuelve al camino</a></p>
    </div>
  </section>

@endsection
