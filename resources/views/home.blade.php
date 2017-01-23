@extends('layout')

@section('title', 'Mapa da Saúde')

@section('content')
<section id="home">
  <div class="explore">
    <h1>Explore o <br>Mapa da Saúde</h1>
    <a href="{{ url('/mapa') }}">
      <button>Explore</button>
    </a>
  </div>
  <div class="complain">
    <h1>Faça agora <br>sua denúncia</h1>
    <a href="{{ url('/denuncie') }}">
      <button>Denuncie</button>
    </a>
  </div>
  
</section>
@stop
