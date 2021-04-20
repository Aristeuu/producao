<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\solicitacaoEmail;
use App\Models\User;


class OperacoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       $user=new User;
       $user = $request->all();
       $validacao = \Validator::make($user,[
         'id_formador' => 'required|int',
         'valor_retirado' => 'required|string'
         
       ],[
        //Mensagens de validação de erros
        'id_formador.required'=>'Erro ao enviar a solicitação',
        'valor_retirado.required'=>'Por favor, informe o valor a solicitar'
    ]);
 
       if($validacao->fails()){
         return redirect()->back()->withErrors($validacao)->withInput();
       }
 
      Mail::to('yetoafrica@gmail.com')->send(new solicitacaoEmail($user));
    
     
     
     
     
    /*$idUser = DB::table('operacoes')->insertGetId(
        ['email' => $request->email,'name' => $request->name,'telefone' => $request->telefone,'tipo' =>$request->tipo,'password' =>Hash::make($request->password),'users_status' => 0,'created_at' =>date("Y-m-d H:i:s")]
    );*/
 
   

       if(DB::table('operacoes')->insert(['id_formador' =>$request->id_formador, 'valor_retirado' =>$request->valor_retirado,'created_at' =>date('Y-m-d h:i:s')] ))
       {
        Session::flash('sms','Solicitaçao nao enviada');
      
       return redirect()->back();  
      

       }
       
}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
