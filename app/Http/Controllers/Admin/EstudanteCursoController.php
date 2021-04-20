<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Aulas;
use App\Models\Cursos;
use App\Models\Modulos;
use App\Models\Pedido;
use App\Models\Aluno;
use App\Models\PedidoCurso;
use App\Models\Pagamentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EstudanteCursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        //$listamodulos=Modulos::listaModul($id);
        $curso=Cursos::find($id);
        $listAulas=Aulas::listaAulaCurso($id);
        $contAula=$listAulas->count();
        $listamodulos=Modulos::listaModul($id);
        $contMod=$listamodulos->count();
        
         $compras = Pedido::cursoPagamento($id);       
        			
        
        return view('negocio.estudante.curso',compact('curso','listAulas','listamodulos','contMod','contAula','compras'));
    }

    public function curso($id)
    {
            //$listamodulos=Modulos::listaModul($id);
            $curso=Cursos::find($id);
         //   dd($curso);
            $listAulas=Aulas::listaAulaCurso($id);
            $contAula=$listAulas->count();
            $listamodulos=Modulos::listaModul($id);
            $contMod=$listamodulos->count();
            $recebe = Aluno::listarAlunologado(Auth::id());
            
             $compras     = Pedido::cursoPagamento($id); 

             $pedido_id   = $compras[0]->id;
             $aluno_id   =  $recebe[0]->id;
               
             $comprovante = Pagamentos::cursoComprovante($pedido_id,$aluno_id);
             
           //dd($comprovante);
           // dd($comprovante);
                                
                                      
            return view('negocio.estudante.vercurso',compact('comprovante','curso','listAulas','listamodulos','contMod','contAula','compras'));
        
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
