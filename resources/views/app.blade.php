<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('/img/favicon.png') }}" />
    <title>Mapa da Saúde</title>
  </head>
  <body>
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
            <a class="navbar-brand" href="{{ url('/') }}">
              <svg x="0px" y="0px" viewBox="0 0 85 40">
                <path fill="#0087CA" d="M36.6,13.4H25.8V2.6c0-1.4-1.2-2.6-2.6-2.6H16c-1.4,0-2.6,1.2-2.6,2.6v10.8H2.6C1.2,13.4,0,14.6,0,16v7.1c0,1.4,1.2,2.6,2.6,2.6h10.8v10.8c0,1.4,1.2,2.6,2.6,2.6h7.1c1.4,0,2.6-1.2,2.6-2.6V25.8h10.8c1.4,0,2.6-1.2,2.6-2.6V16C39.2,14.6,38,13.4,36.6,13.4z"/>
                <path fill="#EF4648" d="M83.7,28.2l-8.6-8.6l8.6-8.6c1-1,1-2.7,0-3.7l-4.1-4.1c-1-1-2.7-1-3.7,0l-8.6,8.6l-8.6-8.6c-1-1-2.7-1-3.7,0l-4.1,4.1c-1,1-1,2.7,0,3.7l8.6,8.6l-8.6,8.6c-1,1-1,2.7,0,3.7L55,36c1,1,2.7,1,3.7,0l8.6-8.6l8.6,8.6c1,1,2.7,1,3.7,0l4.1-4.1C84.7,30.8,84.7,29.2,83.7,28.2z"/>
              </svg>
              <span>Mapa da Saúde</span>
            </a>
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
                          <label for="tipo" class="col-sm-2 control-label">
                              Tipo</label>
                          <div class="col-sm-10">
                            @if (count($tiposDenuncias))
                                @foreach($tiposDenuncias as $tipoDenuncia)
                                    <input type="radio" name="tipo" value="{{$tipoDenuncia['id']}}">{{$tipoDenuncia['nome']}}<br>
                                @endforeach
                            @endif
                              <div class="help-block"></div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="data" class="col-sm-2 control-label">
                              Data</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="data" name="data" placeholder="dd/mm/yyyy" required="" />
                              <div class="help-block"></div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="propriedade" class="col-sm-2 control-label">
                              Unidade de atendimento</label>
                          <div class="col-sm-10">
                            <input type="radio" name="propriedade" value="publica">Pública<br>
                            <input type="radio" name="propriedade" value="privada">Privada
                            <div class="help-block"></div>
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
                              <input type="hidden" name="co_municipio" value="" id="co_municipio" />
                              <input type="hidden" name="co_cnes" value="" id="co_cnes" />
                              <div class="help-block"></div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="provedor" class="col-sm-2 control-label">
                              Provedor</label>
                          <div class="col-sm-10">
                            <input type="radio" name="provedor" value="SUS">SUS<br>
                            <input type="radio" name="provedor" value="Plano de Saúde">Plano de Saúde
                            <div class="help-block"></div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="planoLabel" class="col-sm-2 control-label">
                              Plano de Saúde</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="planoLabel" placeholder="Digite para buscar ou deixe em vazio" required="" />
                            <input type="hidden" name="plano" id="plano" value="">
                            <div class="help-block"></div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="descricao" class="col-sm-2 control-label">
                              Descrição</label>
                          <div class="col-sm-10">
                              <textarea id="descricao" name="descricao"></textarea>
                              <div class="help-block"></div>
                          </div>
                      </div>
                      <div class="row">
                        <button type="submit" class="btn btn-primary btn-lg col-md-offset-2" data-loading-text="Denunciando">Denunciar</button>
                      </div>
                      <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
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
    <script type="text/javascript" src="{{ asset('/js/jquery-1.11.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/typeahead.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/oms.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>

  </body>
</html>