@extends('usuario.main')

@section('title',' BI/Acreditar')

@section('css')
    <link href="{{ asset('assets/progreso.css')}}" rel="stylesheet">
@stop

@section('content')
	<div class="container" >  
		<div class="panel panel-default">      
			<div class="panel-heading">
		        <h3 class="panel-title" align="center">ACREDITAR SALDO</h3>
	    	</div>
	   		<div class="panel-body">
                @include('flash::message')                     
                <!-- debito Form -->
                  {!! Form::open(['action'=>'clientesController@acreditar','method'=>'POST'])!!}
                  <!-- Username Field -->
                      <div class="form-group">
                        {!! Form::label('cuenta','Numero de cuenta:') !!}
                        {!! Form::number('cuenta',null,['class'=>'form-control','placeholder'=>'Ingrese el numero de cuenta','required']) !!}
                      </div>
                       
                      <div class="form-group">
                        {!! Form::label('monto','Monto a acreditar:') !!}
                        {!! Form::number('monto',null,['class'=>'form-control','placeholder'=>'Ingrese el Monto','required','step'=>'any']) !!}
                      </div>

                        <div class="form-group">
                                {!! Form::label('desc','Descripción:') !!}
                                {!! Form::textarea('desc',null, ['class' => 'form-control','required']) !!}
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