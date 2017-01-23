@extends('layout')

@section('title', 'Mapa da Saúde')

@section('content')
<section id="complain">
  <h1>Faça agora <br>sua denúncia</h1>
  <form role="form">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <div>
      <label for="tipo">
        Tipo
      </label>
      <div>
        @if (count($tiposDenuncias))
          @foreach($tiposDenuncias as $tipoDenuncia)
          <label>
            <input type="radio" name="tipo" value="{{$tipoDenuncia['id']}}">
            {{$tipoDenuncia['nome']}}
          </label>
          @endforeach
        @endif
      </div>
    </div>
    <div>
      <label for="data">
        Data
      </label>
      <div>
        <input type="text" id="data" name="data" placeholder="01/01/2017" required>
      </div>
    </div>
    <div>
      <label for="propriedade">
        Unidade de atendimento
      </label>
      <div>
        <input type="radio" name="propriedade" value="publica">Pública<br>
        <input type="radio" name="propriedade" value="privada">Privada
      </div>
    </div>
    <div>
      <label for="local">
        Local
      </label>
      <div>
        <input type="text" id="local" placeholder="Local do ocorrido (unidade de saúde)" required="" />
        <div id="mapLocal"></div>
        <input type="hidden" name="lat" value="" id="lat" />
        <input type="hidden" name="lng" value="" id="lng" />
        <input type="hidden" name="co_municipio" value="" id="co_municipio" />
        <input type="hidden" name="co_cnes" value="" id="co_cnes" />
      </div>
    </div>
    <div>
      <label for="provedor">
        Provedor
      </label>
      <div>
        <input type="radio" name="provedor" value="SUS">SUS<br>
        <input type="radio" name="provedor" value="Plano de Saúde">Plano de Saúde
      </div>
    </div>
    <div>
      <label for="planoLabel">
        Plano de Saúde
      </label>
      <div>
        <input type="text" id="planoLabel" placeholder="Digite para buscar ou deixe em vazio" required="" />
        <input type="hidden" name="plano" id="plano" value="">
      </div>
    </div>
    <div>
      <label for="descricao">
        Descrição
      </label>
      <div>
        <textarea id="descricao" name="descricao"></textarea>
      </div>
    </div>
    <div>
      <button type="submit" data-loading-text="Denunciando">
        Denunciar
      </button>
    </div>
  </form>
</section>
@stop
