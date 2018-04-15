@extends('general.inicio')

@section('title',' Oh/Registro')	

@section('content')
	<div class="container">  
		<div class="panel panel-default">      
			<div class="panel-heading">
		        <h3 class="panel-title">Registro de usuario</h3>
	    	</div>
	   		<div class="panel-body">

                @include('flash::message')              

        		{!! Form::open(['action'=>'clientesController@store','method'=>'POST'])!!}
        		{{-- 'route'=>'ruta.del.metodo' --}}
        			<div class="form-group">
        					{!! Form::label('name','Nombre Completo:') !!}
        					{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingrese su nombre','required']) !!}
        			</div>
        			<div class="form-group">
        					{!! Form::label('username','Username:') !!}
        					{!! Form::text('user',null,['class'=>'form-control','placeholder'=>'Ingrese su apodo','required']) !!}
        			</div>
        			<div class="form-group">
        					{!! Form::label('correo','Correo:') !!}
        					{!! Form::text('correo',null,['class'=>'form-control','placeholder'=>'ejemplo@hotmail.com','required']) !!}
        			</div>
                    <div class="form-group">
                            {!! Form::label('pass','Contraseña:') !!}
                            {!! Form::password('pass',['class'=>'form-control','placeholder'=>'***********','required']) !!}
                    </div>
                    <div class="form-group">
                            {!! Form::label('pass2','Repetir Contraseña:') !!}
                            {!! Form::password('pass2',['class'=>'form-control','placeholder'=>'***********','required']) !!}
                    </div>
                    <div class="form-group" align="center">
                            {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
                    </div>
        		{!! Form::close()!!}
            </div>
	    </div>
    </div>
@stop