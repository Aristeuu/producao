<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Categorias extends Model
{
    protected $table="categorias";

    public static function listaCat(){
        $listaFormador=DB::table('categorias')
        ->select('categorias.id','categorias.cat_nome','categorias.cat_descricao','categorias.cat_data')
        ->orderBy('id','desc')
         ->paginate(10);
        return $listaFormador;
    }
    public static function find($id){   
        $listaFormador=DB::table('cursos')
        ->join('categorias','categorias.id','=','cursos.id_categoria')        
        ->select('cursos.id','cursos.curso_nome','cursos.curso_duracao','cursos.curso_descricao','cursos.curso_img','cursos.curso_data','cursos.curso_preco','categorias.cat_nome','cursos.curso_status')
        ->where('categorias.id',$id)        
        ->get();
        return $listaFormador;
    }
    
}
