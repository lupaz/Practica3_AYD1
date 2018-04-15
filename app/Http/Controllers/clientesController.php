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

    public function store(Request $request)
    {

        //dd($request->all());
        /*if(!preg_match("/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*\W)(?=.*[A-Z]).*$/", $request->pass)){
            flash('ERROR: la contraseña debe tener almenos: 8 caracteres, un numero, un simbolo y una letra mayuscula.')->error()->important();
            return redirect()->back()->withInput();
        }*/

        //validacion de uuario repetido

        $user = DB::table('usuario')->where('user','=',$request->user)->value('user');

        if(!empty($user)){
            flash('ERROR: El usuario ingresado ya se encuentra registrado.')->error()->important();
            return redirect()->back()->withInput();  
            echo $email;
        }

        if($request->pass != $request->pass2){
            flash('ERROR: Las contraseñas no coinciden, intente de nuevo.')->error()->important();
            return redirect()->back()->withInput();
        }

        $codigo = rand(10000, 99999);

        DB::insert('INSERT INTO usuario (nombre,correo,user,pass,codigo) values (?,?,?,?,?)', [$request->name,$request->correo,$request->user,$request->pass,$codigo]);

        $cod_user = DB::table('usuario')->where('user','=',$request->user)->value('cod_user');

        //creamos la cuenta del usuario
        $num_cuenta = rand(1000000000, 9999999999);
        $saldo = 0;

        DB::insert('INSERT INTO cuenta (num_cuenta,saldo,cod_user) values (?,?,?)', [$num_cuenta,$saldo,$cod_user]);

        flash('REGISTRO EXITOSO: Le hemos enviado un correo con el codigo de acceso. #Codigo: '.$codigo)->success()->important();
        return redirect()->back();  
    }


    public function acreditar(Request $request){
        //dd($request->all());
        if($request->cuenta <0 || $request->monto <0){
            flash('ERROR: Numero de cuenta o Monto invalido, intente de nuevo.')->error()->important();
            return redirect()->back()->withInput();
        }

        $cuenta = DB::table('cuenta')->where('num_cuenta','=',$request->cuenta)->get();

        if(empty($cuenta)){
            flash('ERROR: El numero de cuenta no exixte, intente de nuevo.')->error()->important();
            return redirect()->back()->withInput();
        }

        
        $hora_fecha = Carbon::now();
        $nuevo_saldo=$cuenta[0]->saldo + $request->monto;
        $saldo_historial = $nuevo_saldo;
        if($request->cuenta!= \Session::get('cuenta')){
            $saldo_historial = DB::table('cuenta')->where('num_cuenta','=',$request->cuenta)->value('saldo');
        }

        DB::insert('INSERT INTO historial (tipo,monto,cuenta_destino,cod_user,descrip,fecha_hora,saldo_actual) values (?,?,?,?,?,?,?)', ['Credito',$request->monto,$request->cuenta,\Session::get('cod_user'),$request->desc,$hora_fecha,$saldo_historial]);

        //actualizamos el nuevo saldo de la cuenta
        DB::table('cuenta')
            ->where('num_cuenta',$request->cuenta)
            ->update(['saldo' => $nuevo_saldo]);


        flash('CREDITO EXITOSO: Se ha acreditado correctamente el monto indicado')->success()->important();
        return redirect()->back();         
    }

}