<!--Navigation bar-->
<!-- CSFR token for ajax call KENDOUI-->
<meta name="_token" content="{{ csrf_token() }}"/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<!--Banner-->

<link rel="shortcut icon" href="{{ asset('images/favicon.jpg') }}">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{route('pagina.principal')}}">Eco-<span>Monedas</span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#feature"></a></li>
        <li><a href="#organisations"></a></li>
        <li><a href="#courses"></a></li>
        <li><a href="#pricing"></a></li>
      @guest
        <li><a href="{{ route('register')}}">Registrarse</a></li>
        <li><a href="#" class="sesion">Iniciar Sesión</a></li>
      @else
            <li><a href="{{ route('usuarios.mantenimiento')}}">Usuarios</a></li>
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  <span class="glyphicon glyphicon-user"></span>  {{ Auth::user()->nombreCompleto }} {{ Auth::user()->apellidos }}
                </a>
              </li>

                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        <span class="glyphicon glyphicon-log-out"></span> Cerrar sesion
                    </a>

                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

        @endguest
      </ul>
    </div>
  </div>
</nav>
<!--/ Navigation bar-->

<!--Modal box-->
<div id="login" class="modal fade"  role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content no 1-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center form-title">Inicio Sesion</h4>
      </div>
      <div class="modal-body padtrbl">

        <div class="login-box-body">
          <p class="error text-center alert alert-danger hidden"></p>
          <p class="login-box-msg">Entra para poder usar la plataforma</p>
          <div class="form-group">
            <form  id="loginForm" method="post">
              <div class="form-group has-feedback">
                <!----- username -------------->
                <input class="form-control" placeholder="Correo" id="email" name="email" type="email" autocomplete="off" />
                <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span>
                <!---Alredy exists  ! -->
                <p class="errorEmail text-center alert alert-danger hidden"></p>
              </div>
              <div class="form-group has-feedback">
                <!----- password -------------->
                <input class="form-control" placeholder="Contrasenna" id="password" type="password" name="password" autocomplete="off" />
                <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span>
                <!---Alredy exists  ! -->
                <p class="errorPass text-center alert alert-danger hidden"></p>
              </div>
              <div class="modal-footer">
                  @csrf
                  <button type="button" class="btn btn-green btn-block btn-flat ingresar" data-dismiss="modal">Entrar</button>
              </div>
                </div>
                </form>
              </div>

          </div>
        </div>
      </div>
    </div>
