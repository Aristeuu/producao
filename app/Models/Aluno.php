<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Aluno extends Model
{
    protected $table = 'aluno';
    
    protected $fillable = [
        'id',
        'user_id'
    
    ]; 
 
 
 //Função que retorna os alunos
public static function listarAluno(){
    return DB::table('aluno')
                ->join('users', 'users.id', '=', 'aluno.id_user')
                ->where('users.tipo','aluno')
                ->select('users.email','aluno.id_user','users.name','users.email','users.telefone')
                ->paginate(10);
}

 //Função que retorna o aluno logado
/* public static function listarAlunologado($id){
    return DB::table('aluno')
                ->join('users', 'users.id', '=', 'aluno.id_user')
                //->join('perfil', 'perfil.id_user', '=', 'users.id')
                //->join('contacto','contacto.id_perfil','perfil.id')
                ->select('users.tipo','perfil.pais','perfil.bilhete','users.email','aluno.id','users.name','contacto.telefone')
                ->where('users.id',$id)
                ->paginate(10);
}*/
 
//Função que retorna o aluno logado teste
 public static function listarAlunologado($id){
    return DB::table('aluno')
                ->join('users', 'users.id', '=', 'aluno.id_user')
                //->join('perfil', 'perfil.id_user', '=', 'users.id')
                //->join('contacto','contacto.id_perfil','perfil.id')
                ->select('users.tipo','users.email','aluno.id','users.name','users.telefone')
                ->where('users.id',$id)
                ->paginate(10);
}

public static function listarFormadorAlunologado($id)
{
    return DB::table('formador')
                ->join('users', 'users.id', '=', 'formador.id_user')
                //->join('perfil', 'perfil.id_user', '=', 'users.id')
                //->join('contacto','contacto.id_perfil','perfil.id')
                ->select('users.tipo','users.email','formador.id','users.name','users.telefone')
                ->where('users.id',$id)
                ->get();
}


}
