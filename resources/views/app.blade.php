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
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Menu</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Mapa da Saúde</a>
          </div>

          <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
            <form class="navbar-form navbar-right" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Filtro 1 <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 1</a></li>
                  <li><a href="#" class="small" data-value="option2" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 2</a></li>
                  <li><a href="#" class="small" data-value="option3" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 3</a></li>
                  <li><a href="#" class="small" data-value="option4" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 4</a></li>
                  <li><a href="#" class="small" data-value="option5" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 5</a></li>
                  <li><a href="#" class="small" data-value="option6" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 6</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Filtro 2 <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 1</a></li>
                  <li><a href="#" class="small" data-value="option2" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 2</a></li>
                  <li><a href="#" class="small" data-value="option3" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 3</a></li>
                  <li><a href="#" class="small" data-value="option4" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 4</a></li>
                  <li><a href="#" class="small" data-value="option5" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 5</a></li>
                  <li><a href="#" class="small" data-value="option6" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 6</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Filtro 3 <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 1</a></li>
                  <li><a href="#" class="small" data-value="option2" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 2</a></li>
                  <li><a href="#" class="small" data-value="option3" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 3</a></li>
                  <li><a href="#" class="small" data-value="option4" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 4</a></li>
                  <li><a href="#" class="small" data-value="option5" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 5</a></li>
                  <li><a href="#" class="small" data-value="option6" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 6</a></li>
                </ul>
              </li>
              <li><a id="loginButton" href="#">Login</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      <!-- top nav end -->

      <!-- content begin -->
      <div class="row">

        <!--sidebar begin-->
        <div class="col-sm-4 col-md-3 sidebar">
          
          <div class="row">
            <h2>Lorem ipsum dolor</h2>
            sit amet, consectetur adipiscing elit. Suspendisse quis felis vitae mauris pulvinar dignissim hendrerit quis risus. Fusce in urna eu justo consectetur suscipit. Pellentesque sagittis vel metus in dictum. Sed quis mauris tempus, finibus lectus at, laoreet orci. <br/><br/>
          </div><!--/row-->
          <button type="button" class="btn btn-success btn-lg center-block" id="denuncie" aria-label="Left Align">
           <span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span> Faça uma denúncia
          </button>
        </div>
        <!--sidebar end-->

        @yield('content')

        <!--map begin-->
        <div class="col-sm-8 col-md-9 map">
          <div class="google-map-canvas" id="map">
          </div>
        </div>
        <!--map end-->
        
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