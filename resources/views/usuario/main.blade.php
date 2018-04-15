@if(empty(\Session::get('cod_user')))
    {!! header('Location: /') !!}
@endif
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Bank System">
    <meta name="author" content="Luis Paz">
    <link rel="icon" href="{{asset('images/log_bi.ico')}}">

    <title>@yield('title','BI/User')</title>

    <!-- Bootstrap core CSS -->
    <link href=" {{ asset('boostrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @section('css')
    
    @show
    <link href="{{ asset('assets/user.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    
    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

  </head>


<body class="home">

    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a hef="home.html">
                        <img src="{{asset('images/log_bi.png')}}" alt="merkery_logo" class="hidden-xs hidden-sm" >
                        <img src="{{asset('images/log_bi.png')}}" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li class="active"><a href="/usuario"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Perfil</span></a></li>
                        <li><a href="/usuario/credito"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Acreditar Saldo</span></a></li>
                        <li><a href="/usuario/debito"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Debitar Saldo</span></a></li>
                        <li><a href="/usuario/saldo"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Saldo</span></a></li>
                        <li><a href="/usuario/transferencia"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Transferencia</span></a></li>
                        <li><a href="/usuario/historial"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm"></span>Historial</a></li> 
                    </ul>
                    <ul>
                        <br><br><br><br><br><br><br><br><br><br><br><br><br>
                    </ul>
                </div>
            </div>

            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                <div class="row">
                    <header>
                        <div class="col-md-7">
                            <nav class="navbar-default pull-left">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                            </nav>
                        </div>
                        <div class="col-md-5">
                            <div class="header-rightside">
                                <ul class="list-inline header-top pull-right">
                                    
                                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                    <li>
                                        <a href="#" class="icon-info">
                                            <i class="fa fa-bell" aria-hidden="true"></i>
                                            <span class="label label-primary">1</span>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('images/avatarH.png')}}" alt="user">
                                            <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="navbar-content">
                                                    <span>{{\Session::get('nombre')}}</span>
                                                    <p class="text-muted small">
                                                        {{\Session::get('correo')}}
                                                    </p>
                                                    <div class="divider">
                                                    </div>
                                                    <a href="#" class="view btn-sm active">Actualizar Perfil</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="hidden-xs"> <a href="/salir" class="add-project" data-toggle="modal">Cerrar Sesion</a></li>
                                </ul>
                            </div>
                        </div>
                    </header>
                </div>
       
                <div class="user-dashboard">
                    <div class="row placeholders" >
                      <div class="col placeholder" align="center">
                        <img src="{{asset('images/avatarH.png')}}" width="200" height="200" alt="Generic placeholder thumbnail">
                        <h4>{{\Session::get('nombre')}}</h4>
                        <span class="text-muted">{{\Session::get('codigo')}}</span>
                        <h6>Cuenta: {{\Session::get('cuenta')}}</h6>
                      </div>
                    </div>
    @section('content')
                    <h1>Bienvenido, {{ \Session::get('nombre')}}</h1>
                      <!--inicio panel -->
                    <div class="panel panel-default">
                      <div class="panel-heading" >Datos Personales</div>
                      <div class="panel-body">
                        <h4><span class="label label-default">Nombre:</span> <span class="label label-default">{{\Session::get('nombre')}}</span></h4>
                        <h4><span class="label label-default">Username:</span> <span class="label label-default">{{\Session::get('user')}}</span></h4>
                        <h4><span class="label label-default">Correo:</span> <span class="label label-default">{{ \Session::get('correo') }}</span></h4>
                        <h4><span class="label label-default">Codigo:</span> <span class="label label-default">{{ \Session::get('codigo')}}</span></h4>
                        <h4><span class="label label-default">No. Cuenta:</span> <span class="label label-default">{{ \Session::get('cuenta')}}</span></h4>
                        <h4><span class="label label-default">Estado:</span> <span class="label label-success"> ACTIVO</span></h4>
                      </div>
                      <div class="panel-footer">@bancoindustrial</div>
                    </div>                    
                </div>

            @show

            </div>
        </div>

    </div>

 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="{{ asset('/jQuery/jquery-3.2.1.min.js')}}"><\/script>')</script>
    <script src="{{ asset('boostrap/js/bootstrap.min.js')}}"></script>

<!--  Area de Scripts -->
    @section('Scripts')
        <Script>
            $(document).ready(function(){
               $('[data-toggle="offcanvas"]').click(function(){
                   $("#navigation").toggleClass("hidden-xs");
               });
            });
        </Script>
    @show

</body>

</html>