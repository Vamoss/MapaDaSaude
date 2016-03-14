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
            <a class="navbar-brand" href="#">Mapa da Saúde</a>
            <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
            <form class="navbar-form navbar-right" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
           </form>
          </div>
            <ul class="nav navbar-nav navbar-right">
              <li><a id="loginButton" href="#">Login</a></li>
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
              <div class='header'> <label class="pergunta">O que você quer denunciar?</label>
              </div>
                <a href='javascript:;' class='question-2' id='resposta'>Demora no atendimento</a><br>
                <a href='javascript:;' class='question-3' id='resposta'>Ausência de médico</a><br>
                <a href='javascript:;' class='question-4' id='resposta'>Plano de Saúde</a>
              </div>
                      <div class='janeladafroralinda' id='question-2'>
                        <div class='header'> <label class='head'>Demora no Atendimento</label>
                        </div>
                          <label class='pergunta'>Por quanto tempo você esperou?</label>
                          <p class='resposta'> blablabla</p>
                          <a href='javascript:;' class='button-back'>x</a>
                          <a href='javascript:;' class='button-next'>></a>
                        </div>

                        <div class='janeladafroralinda' id='question-21'>
                          <div class='header'> <label class='head'>Demora no atendimento</label> </div>
                          <label class='pergunta'>Onde você foi atendido?</label>
                          <p>campo de texto</p>
                          <a href='javascript:;' class='button-back'>x</a>
                          <a href='javascript:;' class='button-next'>></a>
                        </div>

                        <div class='janeladafroralinda' id='question-22'>
                          <div class='header'> <label class='head'>Demora no atendimento</label> </div>
                          <label class='pergunta'>Você tem plano de saúde?</label>
                          <p>texto</p>
                          <a href='javascript:;' class='button-back'>x</a>
                          <a href='javascript:;' class='button-next'>></a>
                        </div>

                        <div class='janeladafroralinda' id='question-3'>
                          <div class='header'> <label class='head'>Ausência de médico</label>
                            </div>
                              <label class='pergunta'>Que tipo de médico?</label>
                              <p>texto</p>
                              <a href='javascript:;' class='button-back'>x</a>
                              <a href='javascript:;' class='button-next'>></a>
                            </div>

                        <div class='janeladafroralinda' id='question-31'>
                          <div class='header'> <label class='head'>Ausência de médico</label> </div>
                          <label class='pergunta'>Que tipo de médico?</label>
                          <p>campo de texto</p>
                          <a href='javascript:;' class='button-back'>x</a>
                          <a href='javascript:;' class='button-next'>></a>
                        </div>

                        <div class='janeladafroralinda' id='question-4'>
                          <div class='header'> <label class='head'>Plano de Saúde</label></div>
                              <label class='pergunta'>Qual foi o problema?</label>
                              <p>texto</p>
                          <a href='javascript:;' class='button-back'>x</a>
                          <a href='javascript:;' class='button-next'>></a>
                            </div>

                        <div class='janeladafroralinda' id='question-41'>
                          <div class='header'> <label class='head'>Plano de Saúde</label> </div>
                          <label class='pergunta'>Qual o seu plano de saúde?</label>
                          <p>campo de texto</p>
                          <a href='javascript:;' class='button-back'>x</a>
                          <a href='javascript:;' class='button-next'>></a>
                        </div>

                        <div class='janeladafroralinda' id='obrigado'>
                          <div class='header'></div>
                          <label class='pergunta'>Obrigado.</label>
                          <h1>Você é mais que uma estatística.</h1>
                          <p>Conte sua história. Complete sua denúncia com mais detalhes:</p>
                          <p>Campo de texto</p>
                          <a href='javascript:;' class='button-back'>x</a>
                        </div>
                      </form>
           

           <!--ebaaa-->



        </div>
        <!--sidebar end-->

        <!--loginWindow begin-->
        <div id="loginWindow" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Autenticação</h4>
              </div>
              <div class="modal-body">
                  <div class="row">
                      <div class="col-md-8" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                          <!-- Nav tabs -->
                          <ul class="nav nav-tabs">
                              <li class="active"><a href="#Login" data-toggle="tab">Entrar</a></li>
                              <li><a href="#Registration" data-toggle="tab">Cadastrar</a></li>
                          </ul>
                          <!-- Tab panes -->
                          <div class="tab-content">
                              <div class="tab-pane active" id="Login">
                                  <form role="form" class="form-horizontal">
                                  <div class="form-group">
                                      <label for="email" class="col-sm-2 control-label">
                                          Email</label>
                                      <div class="col-sm-10">
                                          <input type="email" class="form-control" id="email1" placeholder="Email" required="" />
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputPassword1" class="col-sm-2 control-label">
                                          Senha</label>
                                      <div class="col-sm-10">
                                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" required="" />
                                      </div>
                                  </div>
                                  <div class="row">
                                    <button type="submit" class="btn btn-primary btn-lg col-md-offset-2">Entrar</button>
                                    <!--<a href="javascript:;">Forgot your password?</a>-->
                                  </div>
                                  </form>
                              </div>
                              <div class="tab-pane" id="Registration">
                                  <form role="form" class="form-horizontal">
                                  <div class="form-group">
                                      <label for="email" class="col-sm-2 control-label">
                                          Nome</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" placeholder="Nome" required="" />
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="email" class="col-sm-2 control-label">
                                          Email</label>
                                      <div class="col-sm-10">
                                          <input type="email" class="form-control" id="email" placeholder="Email" required="" />
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="password" class="col-sm-2 control-label">
                                          Senha</label>
                                      <div class="col-sm-10">
                                          <input type="password" class="form-control" id="password" placeholder="Senha" required="" />
                                      </div>
                                  </div>
                                  <div class="row">
                                      <button type="submit" class="btn btn-primary btn-lg col-md-offset-2">Cadastrar</button>
                                  </div>
                                  </form>
                              </div>
                          </div>
                          <div id="OR" class="hidden-xs">OU</div>
                      </div>
                      <div class="col-md-4">
                          <div class="row text-center sign-with">
                              <div class="col-md-12">
                                  <h3>Entrar com</h3>
                              </div>
                              <div class="col-md-12">
                                  <div class="btn-group btn-group-justified">
                                      <a href="#" class="btn btn-primary">Facebook</a> <a href="#" class="btn btn-danger">Google</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
      <!--loginWindow end-->


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