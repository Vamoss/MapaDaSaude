<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <link rel="shortcut icon" href="{{ URL::asset('img/favicon.png') }}" />
    <title>Mapa da Sa&uacute;de</title>
  </head>
  <body onload="onload()">
    <div class="container-fluid">
      
      <!-- top nav begin -->
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <a class="navbar-brand" href="/">Mapa da Saúde</a>
            <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
            <form class="navbar-form navbar-right" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
           </form>
          </div>
            <ul class="nav navbar-nav navbar-right">
              <li><a id="loginButton" href="#">ENTRAR</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      <!-- top nav end -->

      <!-- content begin -->
      <div class="row">

        @yield('content')

        <!--map begin-->
        <div class="col-sm-8 col-md-9 map">
          <div class="google-map-canvas" id="map">
          </div>
        </div>
        <!--map end-->
        
                <!--sidebar begin-->
        <div class="col-sm-4 col-md-3 sidebar">
          <!--/row-->




          <!--/as coisas que a frora fez-->
           

            <button id="botao" type="submit"><h2>Faça sua denúncia</h2></button>
             

            <div class="janeladafroralinda" id='question-1'>
              <label class="pergunta">O que você quer <br>denunciar?</label>
                <button class='question-2 resposta demora' >Demora no atendimento</button><br>
                <button class='question-3 resposta medico' >Ausência de médico</button><br>
                <button class='question-4 resposta plano' >Plano de Saúde</button>
                <button class='question-5 resposta ambulancia' >Demora na Ambulância</button>
                <button class='question-6 resposta' >Outro</button>
                <button class='question-7 resposta' >Mais um</button>
                <button class='question-8 resposta' >Outro</button>
                <button class='question-9 resposta' >Mais um</button>
                <button class='question-10 resposta' >Outro</button>
                <button class='question-11 resposta' >Mais um</button>
                <button class='question-12 resposta' >Outro</button>
                <button class='question-13 resposta' >Mais um</button>
              </div>
                      <div class='janeladafroralinda' id='question-2'>
                          <label class='pergunta'>Por quanto tempo você esperou?</label>
                          <p class='resposta'> blablabla</p>
                          <div class="footer">
                          <button class='button-back' target='_blank'></button>
                          <button class='button-next' target='_blank'></button>
                        </div>
                        </div>

                        <div class='janeladafroralinda' id='question-3'>
                              <label class='pergunta'>Que tipo de médico?</label>
                          <div class="form-group">
                            <input type="text" class="complete">
                          </div>                              
                          <div class="footer">
                          <button class='button-back' target='_blank'></button>
                          <button class='button-next' target='_blank'></button>
                        </div>
                            </div>

                        <div class='janeladafroralinda' id='question-4'>
                              <label class='pergunta'>Qual foi o problema?</label>
                              <h1>Selecione um ou mais:</h1>
                                <input type="radio" value="autorizacao" checked> AUTORIZAÇÃO DE PROCEDIMENTO<br>
                                <input type="radio" value="negligencia"> NEGLIGÊNCIA<br>
                                <input type="radio" value="impericia"> IMPERÍCIA
                          <div class="footer">
                          <button class='button-back' target='_blank'></button>
                          <button class='button-next' target='_blank'></button>
                        </div>
                            </div>

                        <div class='janeladafroralinda' id='question-21'>
                          <label class='pergunta'>Onde você foi atendido?</label>
                          <div class="form-group">
                            <input type="text" class="complete">
                          </div>
                          <div class="footer">
                          <button class='button-back' target='_blank'></button>
                          <button class='button-next' target='_blank'></button>
                        </div>
                        </div>

                        <div class='janeladafroralinda' id='question-22'>
                          <label class='pergunta'>Você tem plano de saúde?</label>
                            <button class='yes'>SIM</button>
                            <button class='no'>NÃO</button>
                            <div id='qual'>
                              <label class='qual'>Qual?</label>
                              <div class="form-group">
                                <input type="text" class="complete">
                              </div>
                            </div> 
                          <div class="footer">
                          <button class='button-back' target='_blank'></button>
                          <button class='button-next' target='_blank'></button>
                        </div>
                        </div>

                        <div class='janeladafroralinda' id='question-4'>
                              <label class='pergunta'>Qual foi o problema?</label>
                              <h1>Selecione um ou mais:</h1>
                                <input type="radio" value="autorizacao" checked> AUTORIZAÇÃO DE PROCEDIMENTO<br>
                                <input type="radio" value="negligencia"> NEGLIGÊNCIA<br>
                                <input type="radio" value="impericia"> IMPERÍCIA
                          <div class="footer">
                          <button class='button-back' target='_blank'></button>
                          <button class='button-next' target='_blank'></button>
                        </div>
                            </div>

                        <div class='janeladafroralinda' id='question-41'>
                          <label class='pergunta'>Qual o seu plano de saúde?</label>
                          <div class="form-group">
                            <input type="text" class="complete">
                          </div>
                          <div class="footer">
                          <button class='button-back' target='_blank'></button>
                          <button class='button-next' target='_blank'></button>
                        </div>
                        </div>

                        <div class='janeladafroralinda' id='obrigado'>
                          <label class='pergunta'>Obrigado.</label>
                          <h1>Você é mais que uma estatística.</h1>
                          <p>Conte sua história. Complete sua denúncia com mais detalhes:</p>
                            <div class="historia">
                            <div class="triangulo"></div>
                            <textarea id="texto"rows="5" cols="50"></textarea>
                            </div>
                          <div class="footer">
                          <button class='button-back' target='_blank'></button>
                        </div>
                        </div>
                      </form>
           <div id="loginWindow" class="janeladafroralinda">
            <label class="pergunta">Nome e cadastro </label>
            <p>Não divulgaremos seus dados para ninguém.</p>
              <div class="form-group">
                <button class="entrar">JÁ FEZ UMA DENÚNCIA ANTES?<label class='entre'>ENTRAR</label></button>
              </div>    
                <input type="text" class='complete nome' placeholder="Seu nome">  
                <input type="text" class='complete' placeholder="Seu e-mail">
                <input type="text" class='complete' placeholder="Sua senha"> 
                  <div class="footer">
                    <button class='button-back' target='_blank'></button>
                    <button class='button-next' target='_blank'></button>
                  </div>     
           <!--ebaaa-->



        </div>
        <!--sidebar end-->


      <!--denuncieWindow begin-->
        <div id="denuncieWindow" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Denuncie</h4>
              </div>
              <div class="modal-body">
                  <div class="row">
                    <form role="form" class="form-horizontal">
                      <div class="form-group">
                          <label for="email" class="col-sm-2 control-label">
                              Tipo</label>
                          <div class="col-sm-10">
                            @if (count($tiposDenuncias))
                                @foreach($tiposDenuncias as $tipoDenuncia)
                                    <input type="radio" name="tipo" value="{{$tipoDenuncia['id']}}">{{$tipoDenuncia['nome']}}<br>
                                @endforeach
                            @endif
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="data" class="col-sm-2 control-label">
                              Data</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="data" placeholder="dd/mm/yyyy" required="" />
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="unidade" class="col-sm-2 control-label">
                              Unidade de atendimento</label>
                          <div class="col-sm-10">
                            <input type="radio" name="unidade" value="publica">Pública<br>
                            <input type="radio" name="unidade" value="privada">Privada
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="local" class="col-sm-2 control-label">
                              Local</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="local" placeholder="Local do ocorrido (unidade de saúde)" required="" />
                              <div id="mapLocal"></div>
                              <input type="hidden" name="lat" value="" id="lat" />
                              <input type="hidden" name="lng" value="" id="lng" />
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="municipio" class="col-sm-2 control-label">
                              Provedor</label>
                          <div class="col-sm-10">
                            <input type="radio" name="provedor" value="0">SUS<br>
                            <input type="radio" name="provedor" value="1">Plano de Saúde
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="plano" class="col-sm-2 control-label">
                              Plano de Saúde</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="plano" placeholder="Digite para buscar ou deixe em vazio" required="" />
                            <input type="hidden" name="planoId" id="planoId" value="">
                          </div>
                      </div>
                      <div class="row">
                        <button type="submit" class="btn btn-primary btn-lg col-md-offset-2">Denunciar</button>
                      </div>
                      </form>
                  </div>
              </div>
          </div>
        </div>
      </div>
      <!--denuncieWindow end-->


    </div>
    <!-- content end -->

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApquJfOtvb3NYITr_IMJE9vDiXmhuwNTA"></script>
    {!! Html::script('js/all.js'); !!}
  </body>
</html>