@extends('usuario.main')

@section('title',' BI/Debito')

@section('css')
    <link href="{{ asset('assets/progreso.css')}}" rel="stylesheet">
@stop

@section('content')
	<div class="container" >  
		<div class="panel panel-default">      
			<div class="panel-heading">
		        <h3 class="panel-title" align="center">TRANSFERENCIA DE SALDO</h3>
	    	</div>
	   		<div class="panel-body">
                @include('flash::message')                     
                <!-- debito Form -->
                  {!! Form::open(['action'=>'clientesController@transferir','method'=>'POST'])!!}
                  <!-- Username Field -->
                      <div class="form-group">
                        {!! Form::label('cuenta','Numero de cuenta Destino:') !!}
                        {!! Form::number('cuenta',null,['class'=>'form-control','placeholder'=>'Ingrese el numero de cuenta','required']) !!}
                      </div>
                       
                      <div class="form-group">
                        {!! Form::label('monto','Monto a transferir:') !!}
                        {!! Form::number('monto',null,['class'=>'form-control','placeholder'=>'Ingrese el Monto','required','step'=>'any']) !!}
                      </div>   
                      <!-- Login Button -->
                      <div class="row">
                          <div align="center">
                              <button class="btn btn-primary" type="submit">Realizar</button>
                          </div>
                      </div>
                      
                  {!! Form::close()!!}
                <!-- End of Login Form -->     
            </div>
	    </div>
    </div>
@stop