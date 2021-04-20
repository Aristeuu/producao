<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cursos;
use App\Models\Aluno;
use App\Models\Pedido;
use App\Models\Pagamentos;
use App\Models\PedidoCurso;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        $listaCursos=Cursos::listaCursosAl(auth()->user()->id);
           return view('negocio.estudante.cursos',compact('listaCursos')); 
    }

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
        return view('negocio.estudante.cursos');  
    }

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
    
    
     public function listarAlunos()
    {
        $alunos = Aluno::listarAluno();
        return view('admin.config.alunos',compact('alunos'));
    }
    
    
      public function listaAlunoCurso($id)
    {
        
        $cursosAlunos = Pedido::where([
            'user_id' => $id
            ])->orderBy('created_at', 'desc')->get();
            
        
        $aluno = Aluno::where(['id_user'=>$id])->get();

        $id_aluno= $aluno[0]->id;
        
       // $pagamento = Pagamentos::where(['id_aluno'=>$aluno[0]->id])->orderBy('created_at','desc')->get();
        
       $pagamento = Pagamentos::cursoComprovante($id_aluno);

       dd($pagamento);
        
        return view('admin.config.alunoCurso',compact('cursosAlunos','aluno','pagamento'));    

    }



}
 