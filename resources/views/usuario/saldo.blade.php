@extends('usuario.main')

@section('title',' BI/Debito')

@section('css')
    <link href="{{ asset('assets/progreso.css')}}" rel="stylesheet">
@stop

@section('content')
	<div class="container" >  
		<div class="panel panel-default">      
			  <div class="panel-heading">
		        <h3 class="panel-title" align="center">SALDO EN CUENTA ACTIVA</h3>
	    	</div>
	   		<div class="panel-body">
                @include('flash::message')                     
                <table class="table table-hover">
                  <thead>
                    <th>No. Cuenta</th>
                    <th>Propietario</th>
                    <th>Saldo</th>
                  </thead>
                  <tbody>
                      <tr >
                        <td>{{ \Session::get('cuenta')}}</td>
                        <td>{{ \Session::get('nombre') }}</td>
                        <td class="success">{{ $saldo }}</td>
                        <td>
                      </tr>
                  </tbody>
                </table>    
            </div>
	      </div>
    </div>
@stop