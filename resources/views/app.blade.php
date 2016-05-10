<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <link rel="shortcut icon" href="{{ URL::asset('img/favicon.png') }}" />
    <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Hind'>
    <title>Mapa da Sa&uacute;de</title>
  </head>
  <body onload="onload()">
    <div class="container-fluid">
      
      <!-- top nav begin -->
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <a class="navbar-brand" href="/">
              <img src="img/MdS.svg" alt="Mapa da Saúde">
            </a>
            <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
            <form class="navbar-form navbar-right" role="search">
              <div class="form-group">
              <a class="search-button">
                <img src="img/search.svg" alt="search">
              </a>
                <input type="text" class="form-control" placeholder="Consulte as denúncias">
              <a class="cancel-button">
                <img src="img/cancel.svg" alt="cancel">
              </a>
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
          <div class='blue'>
            <h1>Explore o mapa da <br>saúde</h1>
            <button id="bluetao" type="submit"><h2><div>EXPLORE</div></h2></button>
          </div>
        </div>
        <!--map end-->
        
                <!--sidebar begin-->
        <div class="col-sm-4 col-md-3 sidebar">
          <!--/row-->




          <!--/as coisas que a frora fez-->
           
  <div class="denunciar">
    <h1 id="denuncia">Faça agora sua denúncia</h1>
    <button id="botao" type="submit"><h2><div>DENUNCIE</div></h2></button>
  </div>
    

    <div class="janeladafroralinda" id='question-1'>
      <label class="pergunta">O que você quer <br>denunciar?</label>
        <button class='question-2 resposta demora' >Demora no <br>atendimento</button><br>
        <button class='question-3 resposta medico' >Ausência de <br>médico</button><br>
        <button class='question-4 resposta plano' >Plano de <br>Saúde</button>
        <button class='question-5 resposta ambulancia' >Demora na <br>Ambulância</button>
        <button class='question-6 resposta medicamentos' >Ausência de <br>medicamentos</button>
      </div>

          <div class='janeladafroralinda' id='question-2'>
            <label class='pergunta'>Por quanto tempo você esperou?</label>
            <div class="horarios">
              <a class="menos disabled">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                   width="37.834px" height="49.614px" viewBox="0 0 37.834 49.614" enable-background="new 0 0 37.834 49.614" xml:space="preserve">
                  <g>
                    <g>
                      <path fill="#FFFFFF" d="M8.438,29.814L4.06,25.435c-0.453-0.453-0.453-1.188,0-1.643l20.201-20.2c0.454-0.454,1.189-0.454,1.643,0
                        l4.379,4.379c0.453,0.453,0.453,1.188,0,1.642L10.081,29.814C9.628,30.268,8.893,30.268,8.438,29.814z"/>
                      <path fill="#FFFFFF" d="M4.06,23.792l4.379-4.379c0.454-0.453,1.189-0.453,1.643,0l20.201,20.201c0.453,0.453,0.453,1.188,0,1.643
                        l-4.379,4.379c-0.453,0.453-1.188,0.453-1.643,0L4.06,25.435C3.606,24.982,3.606,24.247,4.06,23.792z"/>
                    </g>
                  </g>
                </svg>
              </a>
              <div class="hora">1h</div>
              <a class="mais">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                  width="37.834px" height="49.614px" viewBox="0 0 37.834 49.614" enable-background="new 0 0 37.834 49.614" xml:space="preserve">
                  <g>
                    <g>
                      <path fill="#FFFFFF" d="M29.616,20.34l4.38,4.379c0.453,0.454,0.453,1.189,0,1.643L13.795,46.563
                        c-0.453,0.453-1.189,0.453-1.643,0l-4.379-4.379c-0.453-0.454-0.453-1.189,0-1.643L27.975,20.34
                        C28.428,19.887,29.163,19.887,29.616,20.34z"/>
                      <path fill="#FFFFFF" d="M33.996,26.362l-4.38,4.379c-0.453,0.454-1.188,0.454-1.642,0L7.773,10.54
                        c-0.453-0.453-0.453-1.188,0-1.642l4.379-4.379c0.453-0.454,1.189-0.454,1.643,0l20.201,20.2
                        C34.449,25.173,34.449,25.909,33.996,26.362z"/>
                    </g>
                  </g>
                </svg>
              </a>
            </div>
            <div class="footer">
              <button class='button-next go-next'>PRÓXIMO</button>
            </div>
          </div>
              
          <div class='janeladafroralinda' id='question-21'>
            <label class='pergunta'>Onde você foi atendido?</label>
            <div class="form-group">
              <input type="text" class="complete">
            </div>
            <div class='footer'>
              <button class='button-next go-next'>PRÓXIMO</button>
            </div>
          </div>
    
          <div class='janeladafroralinda' data-bailedefavela="3" id='question-22'>
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
              <button class='button-next go-end'>PRÓXIMO</button>
            </div>
          </div>

           <div class='janeladafroralinda' id='question-3'>
            <label class='pergunta'>Que tipo de médico?</label>
            <div class="form-group">
              <input type="text" class="complete">
            </div>                              
            <div class="footer">
              <button class='button-next go-end'>PRÓXIMO</button>
            </div>
          </div>

          <div class='janeladafroralinda' id='question-4'>
            <label class='pergunta'>Qual foi o problema?</label>
            <h1>Selecione um ou mais:</h1>
            <input type="radio" value="autorizacao" checked> AUTORIZAÇÃO DE PROCEDIMENTO<br>
            <input type="radio" value="negligencia"> NEGLIGÊNCIA<br>
            <input type="radio" value="impericia"> IMPERÍCIA
            <div class="footer">
              <button class='button-next go-next'>PRÓXIMO</button>
            </div>
          </div>

          <div class='janeladafroralinda' id='question-41'>
            <label class='pergunta'>Qual o seu plano de saúde?</label>
            <div class="form-group">
              <input type="text" class="complete">
            </div>
            <div class="footer">
              <button class='button-next go-end'>PRÓXIMO</button>
            </div>
          </div>

          <div class='janeladafroralinda' id='obrigado'>
            <label class='pergunta'>Obrigado.</label>
            <h3>Você é mais que uma estatística.</h3>
            <p>Conte sua história. Complete sua denúncia com mais detalhes:</p>
              <div class="historia">
                <div class="triangulo"></div>
                <textarea id="texto"rows="5" cols="50"></textarea>
              </div>
            <div class="footer">
              <button class='button-back go-begin'>CANCELAR</button>
            </div>
          </div>
        </form>


           <div id="loginWindow" class="janeladafroralinda">
            <label class="pergunta" id="log">Crie um cadastro </label>
                <input type="text" class='complete nome' placeholder="Seu nome">  
                <input type="text" class='complete' placeholder="Seu e-mail">
                <input type="text" class='complete' placeholder="Sua senha">
                <input type="checkbox" name="check" id="anonimo"/>
                <label>Permanecer anonimo</label>
                  <div class="footer">
                    <button class='button-back'>CANCELAR</button>
                    <button class='button-next'>PRÓXIMO</button>
                  </div>
                  <button class="entrar">JÁ FEZ UMA DENÚNCIA?<label class='entre'>ENTRAR</label></button>    
        </div>
        <!--sidebar end-->
    <!-- content end -->

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApquJfOtvb3NYITr_IMJE9vDiXmhuwNTA"></script>
    {!! Html::script('js/all.js'); !!}
  </body>
</html>