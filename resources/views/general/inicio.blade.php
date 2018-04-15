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

    <title>@yield('title','Banco Inudtrial')</title>

    <!-- Bootstrap core CSS -->
    <link href=" {{ asset('boostrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/principal.css')}}" rel="stylesheet">
  </head>

<body>

<nav class="navbar navbar-default navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <a class="navbar-brand navbar-brand-logo" href="/">
            <img class="img-circle"  src="{{asset('images/log_bi.png')}}" width="40" height="40">                   
       </a>
      <a class="navbar-brand" href="/">Banco Industrial</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/">Iinicio</a></li>
        <li><a href="/registro">Registrarse</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Informacion<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="/usuario">Membrecias</a></li>
            <li><a href="#">Cuentas Corrientes</a></li>
            <li><a href="#">Cuenta de Ahorro</a></li>
            <li><a href="#">Cuenta Estafadora</a></li>
            <li class="divider"></li>
            <li><a href="#">Servicio Cliente</a></li>
            <li class="divider"></li>
            <li><a href="#">Contactanos</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><p class="navbar-text">¿Ya tiene una cuenta?</p></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Ingresar</b> <span class="caret"></span></a>
			<ul id="login-dp" class="dropdown-menu">
				<li>
					 <div class="row">
							<div class="col-md-12">
								Ingresa ya:
							<!--	<div class="social-buttons">
									<a href="" scope="public_profile,email" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
									<a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
								</div>
                                o por:
                                
										<br> -->
                    {!! Form::open(['action'=>'clientesController@index','method'=>'POST'])!!}
										<div class="input-group">
                                    <input class="form-control" id="cod" type="text" name="cod" placeholder="11111" required/>
                                    <span class="input-group-btn">
                                        <label class="btn btn-primary"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></label>
                                    </span>
                                </div>
                                <br>
                    <div class="input-group">
				                            <input class="form-control" id="user" type="text" name="user" placeholder="usuario" required/>
				                            <span class="input-group-btn">
				                                <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></label>
				                            </span>
				                        </div>
				                        <br>
										<div class="input-group">
				                            <input class="form-control" id="pass" type="password" name="pass" placeholder="***********" required/>
				                            <span class="input-group-btn">
				                                <label class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></label>
				                            </span>
				                        </div>
				                        <br>
										<div class="form-group">
											 <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
										</div>
										<div class="checkbox">
											 <label>
											 <input type="checkbox">Manetener sesioin abierta.
											 </label>
										</div>
								{!! Form::close()!!}
							</div>
							<div class="bottom text-center">
								¿ Eres nuevo? <a href="/registro"><b>Registrate</b></a>
							</div>
					 </div>
				</li>
			</ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

 @section('content')
 <!-- Carousel
    ================================================== -->
    @include('flash::message')
    <div align="center">
    	<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="{{asset('images/bi1.jpg')}} " alt="First slide" class="img-responsive">  
          <div class="container">
            <div class="carousel-caption">
              <h1>Se parte del futuro.</h1>
              <p>Registrate gratis y obten nuestros servicios.</p>
              <p><a class="btn btn-lg btn-primary" href="/registro" role="button">Registrate Ahora!</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="{{asset('images/bi2.jpg')}} " alt="Second slide" class="img-responsive" >
          <div class="container">
            <div class="carousel-caption">
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Leer mas...</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="{{asset('images/bi3.jpg')}}" alt="Third slide" class="img-responsive">
          <div class="container">
            <div class="carousel-caption">
              <h1>El mejor servicio a tu alcance.</h1>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Ver Referencias</a></p>
            </div>
          </div>
        </div>

        <div class="item">
          <img class="third-slide" src="{{asset('images/bi4.jpg')}}" alt="Third slide" class="img-responsive">
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>

      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    </div>   	
    <!-- /.carousel -->

    @show

	<!--       FOOTER      -->
	<hr class="featurette-divider">
    <div class="container marketing">
      <footer>
        <p class="pull-right"><a href="#">Contactanos</a></p>
        <p>&copy; ACE2-2S-17 Inc. &middot; <a href="#">Privacidad</a> &middot; <a href="#">Terminos</a></p>
      </footer>
    </div><!-- /.container -->  

 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="{{ asset('/jQuery/jquery-3.2.1.min.js')}}"><\/script>')</script>
    <script src="{{ asset('boostrap/js/bootstrap.min.js')}}"></script>

    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src=" {{ asset('/holder/holder.min.js')}}"></script>

</body>
</html>