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

//Função que retorna o total de valores angariado por um formador em todos os cursos

public static function formadorFinancas($id){
  return DB::table('pedidos_cursos')
  ->join('pedidos', 'pedidos.id', '=', 'pedidos_cursos.pedido_id')
  ->join('users', 'users.id', '=', 'pedidos.user_id')             
  ->join('cursos', 'cursos.id', '=', 'pedidos_cursos.curso_id')
  ->join('formador', 'formador.id', '=', 'cursos.id_formador')
  ->select(DB::raw('sum(pedidos_cursos.valor) as valor'))
  ->where('formador.id',$id)
  ->where('pedidos_cursos.status','PA')
  ->get();
}


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
  ->select('pedidos_cursos.valor','pedidos_cursos.status','users.name','users.email','users.id','cursos.curso_nome','users.foto')
  //->groupBy('pedidos_cursos.valor','perfil.nome','users.tipo','perfil.foto','users.email','users.id')
  ->where('formador.id',$idFormador)
  ->get();  
}

}
