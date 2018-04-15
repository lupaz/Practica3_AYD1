@extends('usuario.main')

@section('title',' BI/Debito')

@section('css')
    <link href="{{ asset('assets/progreso.css')}}" rel="stylesheet">
@stop

@section('content')
	<div class="container" >  
		<div class="panel panel-default">      
			  <div class="panel-heading">
		        <h3 class="panel-title" align="center">Historial de Transacciones</h3>
	    	</div>
	   		<div class="panel-body">
                @include('flash::message')                     
                @if(empty($trans))
                  <h4><span class="glyphicon glyphicon-info-sign"></span> <span class="label label-danger">No se encontraron transacciones.</span></h4>
                  <br>
                @else
                  
                    <table class="table table-hover">
                      <thead>
                        <th>Fecha y Hora</th>
                        <th>Tipo</th>
                        <th>Descripción</th>
                        <th>Monto</th>
                        <th>Cuenta Destino</th>
                        <th>Saldo</th>
                      </thead>
                      <tbody>
                        @foreach($trans as $tran)
                          <tr >
                            <td>{{ $tran->fecha_hora}}</td>
                            <td>{{ $tran->tipo}}</td>
                            <td>
                            <textarea  readonly="true" class="form-control"  name="" id="" cols="50" rows="5">{{ $tran->descrip}}</textarea>
                            </td>
                            <td class="danger">{{ $tran->monto}}</td>
                            <td>{{ $tran->cuenta_destino }}</td>
                            <td class="success">{{ $tran->saldo_actual}}</td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <div align="center"> {!! $trans->render() !!}</div>
                  
                @endif    
        </div>
	   </div>
  </div>
@stop