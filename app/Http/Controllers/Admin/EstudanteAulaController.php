<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Aulas;
use App\Models\Cursos;
use App\Models\Modulos;
use App\Models\Aluno;
use App\Models\Pedido;
use App\Models\PedidoCurso;
use App\Models\Pagamentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class EstudanteAulaController extends Controller
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {  
        $listAula=Aulas::find($id);
        $curso=Aulas::listaCurso($id);
        $listAulas=Aulas::listaAulaCurso($curso[0]->id);
        $listamodulos=Modulos::listaModul($curso[0]->id);
        
         $compras = Pedido::cursoPagamento($curso[0]->id); 
        
        return view('negocio.estudante.aula',compact('listAula','listAulas','curso','listamodulos','compras'));
    }

    public function aula($id)
    {  

        //$curso=Aulas::listaCurso($id);
        
        //////////////////////
        $curso=Cursos::find($id);
      
        //$listAula=Aulas::find($id);
      
       // $curso=Aulas::listaCurso($id);
        
        $id_curso = $curso->id;  

      
        $listAulas=Aulas::listaAulaCurso($id_curso);
        
        
        //$contAula=$listAulas->count();
        $listamodulos=Modulos::listaModul($id_curso);
        //dd($listAulas[0]);
        //$contMod=$listamodulos->count();

         $recebe = Aluno::listarAlunologado(Auth::id());
        
         $compras = Pedido::cursoPagamento($id_curso);
         $pedido_id   = $compras[0]->id;  
         $aluno_id    =  $recebe[0]->id;       
         $comprovante = Pagamentos::cursoComprovante($pedido_id,$aluno_id);

         

         $primeiraAula = Aulas::listaAulaModulo($listamodulos[0]->id);
        
        

         
        
      
        
         return view('negocio.estudante.aula',compact('primeiraAula','comprovante','id_curso','curso','listAulas','listamodulos','compras'));
    }

    /**
     * 
     */
    public function aulaview($id_curso, $id_aula)
    {  

        $listAula=Aulas::find($id_aula);
        $curso=Aulas::listaCurso($id_aula);
        $listAulas=Aulas::listaAulaCurso($curso[0]->id);
        $listamodulos=Modulos::listaModul($curso[0]->id); 
            
             
        $recebe = Aluno::listarAlunologado(Auth::id());
        
         $compras = Pedido::cursoPagamento($id_curso);
         $pedido_id = $compras[0]->id;  
         $aluno_id   =  $recebe[0]->id;       
         $comprovante = Pagamentos::cursoComprovante($pedido_id,$aluno_id);

       // dd($listAulas);      
        
        return view('negocio.estudante.aulaview',compact('listAula','comprovante','id_curso','curso','listAulas','listamodulos','compras'));
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
