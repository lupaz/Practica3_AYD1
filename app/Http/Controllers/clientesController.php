<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Flash;
use Carbon\Carbon;

class clientesController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request )
    {
        //dd($request->all());
        $user= DB::table('usuario')->where('user','=',$request->user)->get();
        
        //dd($user);

        if(!empty($user)){

            if($user[0]->codigo != $request->cod){
                flash('ERROR: El codigo ingresado es incorrecto.')->error()->important();
                return redirect()->back();
            }

            if($user[0]->pass==$request->pass){
                    //dd($user[0]);
                    $cuenta= DB::table('cuenta')->where('cod_user','=',$user[0]->cod_user)->get();
                    //agregamos los datos de session
                    \Session::put('cod_user', $user[0]->cod_user); 
                    \Session::put('nombre', $user[0]->nombre);
                    \Session::put('user',$user[0]->user);
                    \Session::put('correo', $user[0]->correo);
                    \Session::put('codigo',$user[0]->codigo);
                    //agregamos datos de cuenta                
                    \Session::put('cuenta',$cuenta[0]->num_cuenta);
                    \Session::put('saldo',$cuenta[0]->saldo);
                    //echo \Session::get('nombres');
                    //dd(\Session::all());
                    return redirect('/usuario');
            }else{
                flash('ERROR: contraseña incorrecta.')->error()->important();
                return redirect()->back();
            }

        }else{
            flash('ERROR: El usuario ingresado es incorrecto.')->error()->important();
            return redirect()->back();
        }

    }

}