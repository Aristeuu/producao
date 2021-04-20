<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Formador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UtilizadorController extends Controller
{
    private $user;

    public function __construct(User $user)
    {
        $this->user=$user;
    }
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
    $listaMigalhas=json_encode([
        ["titulo"=>"Home","url"=>route('admin')],
        ["titulo"=>"Utilizador","url"=>route('utilizadores.index')]
    ]);
       
    $listausers=User::select('id','name','email','foto')->paginate(10);
    return view('admin.utilizador.index',compact('listaMigalhas','listausers'));
 
    }

  
    public function store(Request $request)
    {
             
 
    if($request->tipo=="formador"){
        $img=$request->file('img');
  
           if($request->file('img')->isValid())
           {
                $img=$request->file('img')->store('formador');
   
            }
 
  //Regista o user e retorna o ID gerado
  $idUser = DB::table('users')->insertGetId(
    ['email' => $request->email,'name' => $request->name,'tipo' =>$request->tipo,'img'=>$img,'password' =>Hash::make(654321)]
);
 
     //inserir na tabela perfil 
     $idperfil=DB::table('perfil')->insertGetId(
        ['id_user' => $idUser,'pais' => $request->pais,'bilhete' => $request->bilhete,'facebook' => $request->facebook,'instagram' => $request->instagram,'status' =>false]
       );
       
       DB::table('contacto')->insert(
          ['id_perfil' => $idperfil,'telefone' => $request->telefone]
         );
      

       if(DB::table('formador')->insert(['id_user' => $idUser])){
        Session::flash('sms','O formador foi inserido com sucesso');
        return redirect()->back();  

 }

}else{
    if($request->tipo=="academia" || $request->tipo=="admin" ){
     $img=$request->file('img');
  
     if($request->file('img')->isValid()){
 $img=$request->file('img')->store('academia');
 
 }  

  //Regista o user e retorna o ID gerado
  $idUser = DB::table('users')->insertGetId(
    ['email' => $request->email,'name' => $request->name,'tipo' =>$request->tipo,'img'=>$img,'password' =>Hash::make(654321)]
);
 
 
 //inserir na tabela perfil 
 $idperfil=DB::table('perfil')->insertGetId(
  ['id_user' => $idUser,'pais' => $request->pais,'bilhete' => $request->bilhete,'facebook' => $request->facebook,'instagram' => $request->instagram,'status' =>false]
 );
 
 DB::table('contacto')->insert(
    ['id_perfil' => $idperfil,'telefone' => $request->telefone]
   );

   if(DB::table('academia')->insert(['id_user' => $idUser])){
    Session::flash('sms','A academia foi inserida com sucesso');
    return redirect()->back();  

}

}

else{
    if($request->tipo=="aluno"){
     
     
        if($request->file('img')->isValid()){
    $img=$request->file('img')->store('aluno');
    
    }  

     //Regista o user e retorna o ID gerado
  $idUser = DB::table('users')->insertGetId(
    ['email' => $request->email,'name' => $request->name,'tipo' =>$request->tipo,'img'=>$img,'password' =>Hash::make(654321)]
);
    
    //inserir na tabela perfil 
    $idperfil=DB::table('perfil')->insertGetId(
     ['id_user' => $idUser,'pais' => $request->pais,'bilhete' => $request->bilhete,'facebook' => $request->facebook,'instagram' => $request->instagram,'status' =>false]
    );
    
    DB::table('contacto')->insert(
       ['id_perfil' => $idperfil,'telefone' => $request->telefone]
      );
   
      if(DB::table('aluno')->insert(['id_user' => $idUser])){
        Session::flash('sms','O aluno foi inserido com sucesso');
        return redirect()->back();}

}

 }
    }
}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public  function show($id)
    {
        return User::find($id);   
    }

   
    public function update(Request $request, $id)
    {
        if(DB::table('users')          
        ->where('id','=',$id)
        ->update(['name'=>$request->name,'email'=>$request->email]))
    {
        return redirect()->back();
    }      
    }

   
    public function destroy($id)
    {
        User::find($id)->delete();
        Session::flash('sms','Eliminado com sucesso');
        return redirect()->back();
    }

    public function perfil()
    {
         $id_user = auth()->user()->id;
         
          //$Listaoperacoes = Operacoes::where(['id_formador'=>$id_formador])->orderBy('created_at','desc')->get();
          $bank_data = Formador::where(['id_user'=>$id_user])->get();
          
        return view('admin.perfis.editarPerfil', compact('bank_data'));
    }
    public function perfilAluno()
    {
         $id_user = auth()->user()->id;
         
          //$Listaoperacoes = Operacoes::where(['id_formador'=>$id_formador])->orderBy('created_at','desc')->get();
        
          
        return view('admin.aluno.perfilAluno');
    }

    public function editarPerfil(Request $request, $id)
    {     
        $img=$request->file('foto');
        $conta = $request->input('conta_bancaria');
        $iban = $request->input('iban');
        $titular = $request->input('titular');
        
        if($img!=null){
            if($request->file('foto')->isValid()){
                $img=$request->file('foto')->store('utilizadores');


                if(empty($request->password)){
                     DB::table('users')->where('id','=',$id)->update(['name'=>$request->name,'email'=>$request->email,'telefone'=>$request->telefone,'foto'=>$img]);
                    return redirect()->back();
                }else{
                    DB::table('users')->where('id','=',$id)->update(['name'=>$request->name,'foto'=>$img,'email'=>$request->email,'telefone'=>$request->telefone,'password'=>Hash::make($request->password)]);
                }
                
                if($conta!=null && $iban!=null && $titular != null )
                {
                     DB::table('formador')->where('id_user','=',$id)->update(['conta_bancaria'=>$conta,'iban'=>$iban,'titular'=>$titular]);
                }
                
       
                if(DB::table('perfil')          
                ->where('id','=',$id)
                ->update(['pais'=>$request->pais,'bilhete'=>$request->bilhete,'data_nasc'=>$request->data_nasc,'profissao'=>$request->profissao,'bairro'=>$request->bairro,'provincia'=>$request->provincia,'municipio'=>$request->municipio]))
                 {
                    Session::flash('sms','Actualizado com sucesso');
                     return redirect()->back();
                 }  
            }

        }
        
        if($conta!=null && $iban!=null && $titular != null )
        {
                    DB::table('formador')->where('id_user','=',$id)->update(['conta_bancaria'=>$conta,'iban'=>$iban,'titular'=>$titular]);
        }
        
        if(DB::table('perfil')          
        ->where('id','=',$id)
        ->update(['pais'=>$request->pais,'bilhete'=>$request->bilhete,'data_nasc'=>$request->data_nasc,'profissao'=>$request->profissao,'bairro'=>$request->bairro,'provincia'=>$request->provincia,'municipio'=>$request->municipio]))
        {
        Session::flash('sms','Actualizado com sucesso');
       
        }

        if(empty($request->password)){
            DB::table('users')->where('id','=',$id)->update(['name'=>$request->name,'email'=>$request->email,'telefone'=>$request->telefone]);
            return redirect()->back();
        }else{
             DB::table('users')->where('id','=',$id)->update(['name'=>$request->name,'foto'=>$img,'email'=>$request->email,'password'=>Hash::make($request->password),'telefone'=>$request->telefone]);
        }
        

          

         return redirect()->back();
    }
    
    
    //aluno
    public function editarPerfilAluno(Request $request, $id)
    {     
        $img=$request->file('foto');
      
        
        if($img!=null){
            if($request->file('foto')->isValid()){
                $img=$request->file('foto')->store('utilizadores');


                if(empty($request->password)){
                     DB::table('users')->where('id','=',$id)->update(['name'=>$request->name,'email'=>$request->email,'telefone'=>$request->telefone,'foto'=>$img]);
                    return redirect()->back();
                }else{
                    DB::table('users')->where('id','=',$id)->update(['name'=>$request->name,'foto'=>$img,'email'=>$request->email,'telefone'=>$request->telefone,'password'=>Hash::make($request->password)]);
                }
       
                if(DB::table('perfil')          
                ->where('id','=',$id)
                ->update(['pais'=>$request->pais,'bilhete'=>$request->bilhete,'data_nasc'=>$request->data_nasc,'profissao'=>$request->profissao,'bairro'=>$request->bairro,'provincia'=>$request->provincia,'municipio'=>$request->municipio]))
                 {
                    Session::flash('sms','Actualizado com sucesso');
                     return redirect()->back();
                 }  
            }

        }
        
       
        
        if(DB::table('perfil')          
        ->where('id','=',$id)
        ->update(['pais'=>$request->pais,'bilhete'=>$request->bilhete,'data_nasc'=>$request->data_nasc,'profissao'=>$request->profissao,'bairro'=>$request->bairro,'provincia'=>$request->provincia,'municipio'=>$request->municipio]))
        {
        Session::flash('sms','Actualizado com sucesso');
       
        }

        if(empty($request->password)){
            DB::table('users')->where('id','=',$id)->update(['name'=>$request->name,'email'=>$request->email,'telefone'=>$request->telefone]);
            return redirect()->back();
        }else{
             DB::table('users')->where('id','=',$id)->update(['name'=>$request->name,'foto'=>$img,'email'=>$request->email,'password'=>Hash::make($request->password),'telefone'=>$request->telefone]);
        }
        

          

         return redirect()->back();
    }
    

}
