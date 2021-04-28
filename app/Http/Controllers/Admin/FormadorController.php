<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Academia;
use App\Models\AcademiaFormador;
use App\Models\Categorias;
use App\Models\Cursos;
use App\Models\Aulas;
use App\Models\Formador;
use App\Models\Modulos;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class FormadorController extends Controller
{
    public function index()
    {
        $idAcademia=Academia::idAcademia(auth()->user()->id);
        $listausers=AcademiaFormador::formadorAcademia($idAcademia[0]->id);
       //dd($listausers);
        return view('admin.formador.index',compact('listausers'));
    }

   
    public function store(Request $request)
    {
        
    $id_academia=Academia::idAcademia(auth()->user()->id);
        //Regista o user e retorna o ID gerado
    $idUser = DB::table('users')->insertGetId(
    ['name' => $request->name,'email' => $request->email,'tipo' => $request->tipo,'password' =>Hash::make(654321)]
 );
 
      $img=$request->file('foto');
 
       if($request->file('foto')->isValid()){
       $img=$request->file('foto')->store('aluno');
 
 }  
 
 //inserir na tabela perfil 
      DB::table('perfil')->insert(
      ['id_user' => $idUser,'nome' => $request->nome,'pais' => $request->pais,'bilhete' => $request->bilhete,'descricao' => $request->descricao,'facebook' => $request->facebook,'instagram' => $request->instagram,'foto'=>$img,'status' =>false]
 );
 
 $idform = DB::table('formador')->insertGetId(
    ['id_user' => $idUser]
 );

 if(DB::table('form_acad')->insert(
      ['id_formador' =>$idform,'id_academia' =>$id_academia[0]->id])){
    return redirect()->back();
 }
 
 }

 
    public function show($id)
    {
        return User::find($id);
    }

  
    public function destroy($id)
    {
        User::find($id)->delete();
        
        return redirect()->back();
    }

    public function formadores(){
        $listarFormador=Formador::listarFormador();
        $src = config('app.image');
        
        //dd($listarFormador);
        $formador="active";
        return view('admin.formador.formadores',compact('src','formador','listarFormador'));
    }

    public function registar(){
        $listaCategorias=Categorias::all();
        return view('admin.formador.registar',compact('listaCategorias'));
    }
    
    public function bancodata(Request $request)
    {
         $dados=new Formador;
       $dados->formador_id=$request->input('id_formador');
       $dados->formador_titular=$request->input('titular');
       $dados->formador_conta=$request->input('conta_bancaria');
       $dados->formador_iban=$request->input('iban');
       
       
    //inserir dados bancarios no formador
         if(DB::table('formador')          
            ->where('id','=',$dados->formador_id)
            ->update(['conta_bancaria'=>$dados->formador_conta,'iban' => $dados->formador_iban,'titular'=>$dados->formador_titular]))
        {
           
            return redirect()->back();
        }   
    }    
    public function meusCursos()
    {
        $listMeuscursos=Cursos::listaCursosForm(auth()->user()->id);
        $listaFormador=Formador::listarFormadorlogado(auth()->user()->id);
        $listaCategoria=Categorias::all();
        $src = config('app.image');
        

        return view('negocio.formador.cursos',compact('src','listMeuscursos','listaCategoria','listaFormador'));
    }

    public function meusModulos($id)
    {
        $listaModulos=Modulos::listaModul($id);
        $listaCursos=Cursos::find($id);	
        return view('negocio.formador.modulos',compact('listaModulos','listaCursos'));
    }

    public function meusCursosAcademia()
    {
        $idAcademia=Academia::idAcademia(auth()->user()->id);
        $listaFormadores=AcademiaFormador::formadorAcademia($idAcademia[0]->id);
        $listMeuscursos=Cursos::listaCursosAcademia(auth()->user()->id);
        $listaFormador=Academia::listarAcademialogado(auth()->user()->id);
        $listaCategoria=Categorias::all();
        return view('admin.academia.cursosacademia',compact('listMeuscursos','listaCategoria','listaFormador','listaFormadores'));
    }


    public function alunosCurso($id){
        $buscarFormador=Formador::listarFormadorlogado(auth()->user()->id);
        $alunosCurso=Formador::alunosCurso($buscarFormador[0]->id,$id);
        $totalSaldos=0;
        foreach($alunosCurso as $lista){
            $totalSaldos=$totalSaldos+$lista->valor;
        }

        $totalSaldo=$totalSaldos*0.70;
        return view('admin.formador.alunos',compact('alunosCurso','totalSaldo'));

    }

    public function alunosCursos(){

        $buscarFormador=Formador::listarFormadorlogado(auth()->user()->id);
        $alunosCurso=Formador::alunosCursos($buscarFormador[0]->id);
        $totalSaldos=0;
        foreach($alunosCurso as $lista){
            $totalSaldos=$totalSaldos+$lista->valor;
        }        
        //dd($alunosCurso);
        $totalSaldo=$totalSaldos*0.70;
                return view('admin.formador.alunosCursos',compact('alunosCurso','totalSaldo'));
       }



//ver curso para o formador
public function view($id){
    $id1 = $id;
    $listaCurso=Cursos::find($id1);
    $listaCategorias=Categorias::all();
    $listaModulos=Modulos::listaModul($id);
        
    $curso="active";
    $recebe="";
    $formador="";
    $src=config('app.image');
    //////////////////////////////////      

   // dd($listaCurso);
    $listamodulos=Modulos::listaModul($id1);
    $contMod  =$listamodulos->count();
    $listAulas=Aulas::listaAulaCurso($id1);
    $contAula = $listAulas->count(); 


    $buscarFormador=Formador::FormadorCurso($listaCurso->id_formador);       
    
    $id_formador = $buscarFormador[0];
    $listaFormadores = Formador::listarFormadores();
    
   
   foreach($listaCategorias as $lista){
         if($lista->id==$listaCurso->id_categoria)
            $recebe=$lista->cat_nome;
   }


   
  return view('negocio.formador.view',compact('listaFormadores','id_formador','src','listaCurso','recebe','curso','listamodulos','listAulas','contMod','contAula','listaModulos'));  

}

//upload

public function upload($id)
{
        $id1 = $id;     
    
        $curso="active";
        $recebe="";
        $formador="";
        //////////////////////////////////      
    
        
        $modulos=Modulos::ListaMod($id1);
        //$listAulas=Aulas::listaAulaCurso($id1); 
        
    
        
        return view('negocio.formador.upload',compact('modulos'));
        
    
    /*if(isset(auth()->user()->id)){
        $listaPedido=Pedido::cursoPr(auth()->user()->id);
        return view('admin.cursos.detalhes',compact('listaCurso','recebe','curso','modulos','listaPedido','listAulas','listAula'));  
    }else{
        return view('admin.cursos.detalhes',compact('listaCurso','recebe','curso','modulos','listAulas'));  
    }*/
}



//ver curso para o admin
public function cursoview($id){
    //$id1 = base64_decode($id);
    $listaCurso=Cursos::find($id);
    $listaCategorias=Categorias::all();
    $curso="active";
    $recebe="";
    $formador="";
    //////////////////////////////////      

    
    $listamodulos=Modulos::listaModul($id);
    $contMod  =$listamodulos->count();
    $listAulas=Aulas::listaAulaCurso($id);
    $contAula = $listAulas->count();        
    
   
   foreach($listaCategorias as $lista){
         if($lista->id==$listaCurso->id_categoria)
            $recebe=$lista->cat_nome;
   }


   
  return view('admin.config.curso',compact('listaCurso','recebe','curso','listamodulos','listAulas','contMod','contAula'));  

}


  //Administrativas

            public function listarFormadores()
            {
                $formadores=Formador::listarFormador();

                return view('admin.config.formadores',compact('formadores'));
            }

}


