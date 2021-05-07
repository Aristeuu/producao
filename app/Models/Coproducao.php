<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Coproducao extends Model
{
    //
    protected $table="coproducao";
    protected $fillable = ['id','id_curso','id_formador','id_cop','statusYeto','percenF','percenC','created_at','update_at'];
    
    //Função que retorna os formadores
    public static function listarCoprodutores(){
        return DB::table('coproducao')
                    ->join('formador', 'formador.id', '=', 'coproducao.id_formador')
                    ->join('users','users.id', '=','formador.id_user')
                    ->join('cursos', 'cursos.id','=','coproducao.id_curso')
                    ->select('users.tipo','users.email','formador.id','users.name','users.foto')
                    ->paginate(10);
    }
    //coprodutores de um curso
    public static function CursoCoprodutores($id){
        return DB::table('coproducao')                    
                    ->select('coproducao.id_curso','coproducao.id_formador','coproducao.id_cop','coproducao.statusYeto','coproducao.percenF','coproducao.percenC','coproducao.created_at','coproducao.updated_at')
                    ->where('coproducao.id_curso',$id)
                    ->get();
    }
    
    //listar percentagens do formador por curso
    public static function CursoPercent($id){
        return DB::table('coproducao')                    
                    ->select('coproducao.id_curso','coproducao.id_formador','coproducao.id_cop','coproducao.statusYeto','coproducao.percenF','coproducao.percenC','coproducao.created_at','coproducao.updated_at')
                    ->where('coproducao.id_formador',$id)
                    ->get();
    }

      //listar percentagens do coProdutor por curso
      public static function CoprodPercent($id){
        return DB::table('coproducao')                    
                    ->select('coproducao.id_curso','coproducao.id_formador','coproducao.id_cop','coproducao.statusYeto','coproducao.percenF','coproducao.percenC','coproducao.created_at','coproducao.updated_at')
                    ->where('coproducao.id_cop',$id)
                    ->get();
    }





}
