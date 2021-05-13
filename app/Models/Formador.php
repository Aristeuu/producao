<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Formador extends Model
{

    protected $table = 'formador';
   
     //Função que retorna os formadores
     public static function listarFormador(){
        return DB::table('formador')
                    ->join('users', 'users.id', '=', 'formador.id_user')
                    ->select('users.tipo','users.email','formador.id','users.name','users.foto')
                    ->paginate(10);
    }

    //Função que retorna os formadores
    public static function listarFormadores($id){
      return DB::table('formador')
                  ->join('users', 'users.id', '=', 'formador.id_user')
                  ->select('users.tipo','users.email','formador.id','users.name','users.foto')
                  ->where('users.tipo','formador')
                  ->where('users.id','<>',$id)
                  ->get();
  }
   
    public static function verTipo($id){
        return DB::table('perfil')
                    ->where('id_user',$id)
                    ->select('tipo')
                    ->get();
     
     }
     
   //Função que retorna os formadores
   public static function listarFormadorlogado($id){
    return DB::table('formador')
                ->join('users', 'users.id', '=', 'formador.id_user')
               // ->join('perfil', 'perfil.id_user', '=', 'users.id')
               // ->join('contacto','contacto.id_perfil','perfil.id')
                ->select('users.tipo','users.email','formador.id','users.name','formador.conta_bancaria','formador.iban','formador.titular')
                ->where('users.id',$id)
                ->paginate(10);
}

//Função que retorna os formadores
public static function listarFormadorCurso($id){
  return DB::table('formador')
              ->join('users', 'users.id', '=', 'formador.id_user')
              ->join('perfil', 'perfil.id_user', '=', 'users.id')
              ->select('users.tipo','perfil.pais','perfil.bilhete','users.email','formador.id','users.name')
              ->where('users.id',$id)
              ->paginate(10);
}



//Função que retorna id_user FormadorCoprodutor
public static function listarCoprodutorIdUser($id){
  return DB::table('formador')              
              ->select('formador.id_user')
              ->where('formador.id',$id)
              ->get();
}


//Função que retorna dados FormadorCoprodutor
public static function listarCoprodutor($id){
  return DB::table('users')              
              ->select('users.tipo','users.email','users.name','users.foto')
              ->where('users.id',$id)
              ->get();
}


//Função que retorna dados FormadorCoprodutor
public static function buscarCoprodutor($id){
  return DB::table('formador') 
              ->join('users','users.id','=','formador.id_user')
              ->join('cursos','cursos.id_coprodutor','=','formador.id')             
              ->select('users.tipo','users.email','users.name','users.foto','cursos.coprod_percent')
              ->where('formador.id',$id)
              ->get();
}





//função que retorna o formador pelo id do curso
public static function FormadorCurso($id){
  return DB::table('formador')
              ->join('users', 'users.id', '=', 'formador.id_user')             
              ->join('cursos', 'cursos.id_formador','=','formador.id')
              ->select('users.tipo','users.email','formador.id','users.name','users.foto')
              ->where('cursos.id_formador',$id)
              ->get();
}

//Função que retorna o total de valores angariado por um formador em todos os cursos

public static function formadorFinancas($id){
  return DB::table('pedidos_cursos')
  ->join('pedidos', 'pedidos.id', '=', 'pedidos_cursos.pedido_id')
  ->join('users', 'users.id', '=', 'pedidos.user_id')             
  ->join('cursos', 'cursos.id', '=', 'pedidos_cursos.curso_id')
  ->join('formador', 'formador.id', '=', 'cursos.id_formador')  
  ->select('pedidos_cursos.curso_id','cursos.curso_nome','cursos.curso_valorReal')
   
  ->where([
     ['formador.id','=',$id],
     ['pedidos_cursos.status','=','PA']
      ])   
  ->get();
}



//Função que retorna o total de valores angariado por um formador em todos os cursos

public static function CoprodutorFinancas($id){
  return DB::table('pedidos_cursos')
  ->join('pedidos', 'pedidos.id', '=', 'pedidos_cursos.pedido_id')
  ->join('users', 'users.id', '=', 'pedidos.user_id')             
  ->join('cursos', 'cursos.id', '=', 'pedidos_cursos.curso_id')
  ->join('formador', 'formador.id', '=', 'cursos.id_formador')  
  ->select('pedidos_cursos.curso_id','cursos.curso_nome','cursos.curso_valorReal')
  ->where('cursos.id_coprodutor',$id)  
  ->where('pedidos_cursos.status','PA')
  ->get();
}

//Função que retorna o total de valores angariado por um formador em todos os cursos


/*public static function formadorFinancas($id){
  return DB::table('pedidos_cursos')
  ->join('pedidos', 'pedidos.id', '=', 'pedidos_cursos.pedido_id')
  ->join('users', 'users.id', '=', 'pedidos.user_id')             
  ->join('cursos', 'cursos.id', '=', 'pedidos_cursos.curso_id')
  ->join('formador', 'formador.id', '=', 'cursos.id_formador')  
  ->select('pedidos_cursos.curso_id','cursos.curso_nome','cursos.curso_valorReal')
   
  ->where([
     ['formador.id','=',$id],
     ['pedidos_cursos.status','=','PA']
      ]) 
  ->orwhere([
    ['cursos.id_coprodutor','=',$id],
    ['pedidos_cursos.status','PA']
  ])
  ->get();
}*///TENTANDO TRAZER TODAS A FINANÇAS NA MESMA MODEL TENTATIVA NÃO SUCEDIDA
//CODIGO PARA POSTERIOR ANALISE 


//calcular entrada de valores
public static function formadorFinancasEntrada($id){
  return DB::table('pedidos_cursos')
  ->join('pedidos', 'pedidos.id', '=', 'pedidos_cursos.pedido_id')
  ->join('users', 'users.id', '=', 'pedidos.user_id')             
  ->join('cursos', 'cursos.id', '=', 'pedidos_cursos.curso_id')
  ->join('formador', 'formador.id', '=', 'cursos.id_formador')
  ->select('pedidos_cursos.created_at','pedidos_cursos.valor')
  ->where('formador.id',$id)
  ->where('pedidos_cursos.status','PA')
  ->get();
}

//função que retorna as saidas e dinheiro de um determinado formador

public static function formadorSolicitacao($idformador)
{
    return DB::table('operacoes')
    ->join('formador','formador.id', '=', 'operacoes.id_formador')
    ->select(DB::raw('sum(operacoes.valor_retirado) as valor_retirado'))
    ->where('formador.id',$idformador)
    ->get();
}



//Função que retorna dados FormadorCoprodutor
public static function ListarYetoafrica($id){
  return DB::table('users')              
              ->select('users.tipo','users.email','users.name','users.foto','users.id')
              ->where('users.name',$id)
              ->get();
}


//Função que retorna dados FormadorCoprodutor
public static function ListarAluno($id){
  return DB::table('users')                           
              ->select('users.tipo','users.email','users.name','users.foto','users.tipo','users.telefone')
              ->where('users.id',$id)
              ->get();
}





//função que retorna os inscritos em um determinado curso

public static function alunosCurso($idFormador,$idcurso){
  return DB::table('pedidos_cursos')
  ->join('pedidos', 'pedidos.id', '=', 'pedidos_cursos.pedido_id')
  ->join('users', 'users.id', '=', 'pedidos.user_id')             
  ->join('cursos', 'cursos.id', '=', 'pedidos_cursos.curso_id')
  ->join('aluno','aluno.id_user', '=', 'users.id')
  //->join('perfil', 'perfil.id_user', '=', 'users.id')
  ->join('formador', 'formador.id', '=', 'cursos.id_formador')
  ->select('pedidos_cursos.valor','users.name','users.email','users.id','cursos.curso_nome')
  //->groupBy('pedidos_cursos.valor','perfil.nome','users.tipo','perfil.foto','users.email','users.id')
  ->where('formador.id',$idFormador)
  ->where('cursos.id',$idcurso)
  ->where('pedidos_cursos.status','PA')
  ->paginate(10);  
}

//função que lista alunos de todos os cursos de um determinado formador
public static function alunosCursos($idFormador){
  return DB::table('pedidos_cursos')
  ->join('pedidos', 'pedidos.id', '=', 'pedidos_cursos.pedido_id')
  ->join('users', 'users.id', '=', 'pedidos.user_id')             
  ->join('cursos', 'cursos.id', '=', 'pedidos_cursos.curso_id')
  ->join('aluno','aluno.id_user', '=', 'users.id')
//  ->join('perfil', 'perfil.id_user', '=', 'users.id')
  ->join('formador', 'formador.id', '=', 'cursos.id_formador')  
  ->select('pedidos_cursos.valor','pedidos_cursos.status','pedidos_cursos.created_at','users.id','users.name','users.email','cursos.curso_nome','users.foto','cursos.id_formador')
  //->groupBy('pedidos_cursos.valor','perfil.nome','users.tipo','perfil.foto','users.email','users.id')
  ->where('formador.id',$idFormador)
  ->orWhere('cursos.id_coprodutor',$idFormador)
  ->get();  
}

}
