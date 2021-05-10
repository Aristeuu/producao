<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Cursos extends Model
{
    protected $table="cursos";
    
    
    //função para listar todos os cursos ativos no frontend
    public static function listaCursos(){
   
        $listaFormador=DB::table('cursos')
        ->join('formador','formador.id','=','cursos.id_formador')
        ->join('categorias','categorias.id','=','cursos.id_categoria')
        ->join('users','users.id','=','formador.id_user')
        ->select('cursos.id','users.name','cursos.curso_nome','cursos.curso_duracao','cursos.curso_descricao','cursos.curso_img','cursos.curso_data','cursos.curso_preco','categorias.cat_nome','cursos.curso_status')
        ->where('cursos.curso_status',3)
        ->orderBy('cursos.id','desc')
        ->paginate(10);
        return $listaFormador;
}
//funcao para listar 3 cursos no aluno caso não tenha efectuado nenhuma compra
public static function listaCursosAluno(){
   
        $listaFormador=DB::table('cursos')
        ->join('formador','formador.id','=','cursos.id_formador')
        ->join('categorias','categorias.id','=','cursos.id_categoria')
        ->join('users','users.id','=','formador.id_user')
        ->select('cursos.id','users.name','cursos.curso_nome','cursos.curso_duracao','cursos.curso_descricao','cursos.curso_img','cursos.curso_data','cursos.curso_preco','categorias.cat_nome','cursos.curso_status')
        ->where('cursos.curso_status',3)
        ->orderBy('cursos.id','desc')
        ->paginate(3);
        return $listaFormador;
}

//função para listar todos os cursos para o admin
   public static function listaCursosAdmin(){
   
    $listaFormador=DB::table('cursos')
    ->join('formador','formador.id','=','cursos.id_formador')
    ->join('categorias','categorias.id','=','cursos.id_categoria')
    ->join('users','users.id','=','formador.id_user')
    ->select('cursos.id','users.name','cursos.curso_nome','cursos.curso_duracao','cursos.curso_descricao','cursos.curso_img','cursos.curso_data','cursos.curso_preco','categorias.cat_nome','cursos.curso_status')
    
    ->orderBy('cursos.id','desc')
    ->paginate(10);
    return $listaFormador;
}
  



public static function listaCursoCat($id){
   
    $listaFormador=DB::table('cursos')
    ->join('formador','formador.id','=','cursos.id_formador')
    ->join('categorias','categorias.id','=','cursos.id_categoria')
    ->join('users','users.id','=','formador.id_user')
    ->select('cursos.id','users.name','cursos.curso_nome','cursos.curso_duracao','cursos.curso_descricao','cursos.curso_img','cursos.curso_data','cursos.curso_preco','categorias.cat_nome','cursos.curso_status')
    ->where('categorias.id',$id)
    ->orderBy('cursos.id','desc')
    ->paginate(10);
    return $listaFormador;
}


public static function listaCursosForm($id){
   
    $listaFormador=DB::table('cursos')
    ->join('formador','formador.id','=','cursos.id_formador')
    ->join('categorias','categorias.id','=','cursos.id_categoria')
    ->join('users','users.id','=','formador.id_user')
    ->select('cursos.id','cursos.curso_nome','cursos.curso_duracao','cursos.curso_img','cursos.curso_data','cursos.curso_valorReal','cursos.curso_preco','categorias.cat_nome','cursos.curso_status','cursos.curso_link','cursos.curso_descricao','cursos.id_coprodutor','cursos.coprod_percent')
    ->where('formador.id',$id)
    ->orwhere('cursos.id_coprodutor',$id)
    ->orderBy('cursos.id','desc')
    ->paginate(10);
    return $listaFormador;
}

public static function listaCursosAl($id){   
    $listaFormador=DB::table('cursos')
    ->join('pedidos_cursos','pedidos_cursos.curso_id','=','cursos.id')
    ->join('pedidos','pedidos.id','=','pedidos_cursos.pedido_id')
    ->join('users','users.id','=','pedidos.user_id')
    ->select('cursos.id','cursos.curso_nome')
    ->where('users.id',$id)
    ->where('pedidos_cursos.status','PA')
    ->orderBy('cursos.id','desc')
    ->paginate(10);
    return $listaFormador;
}



public static function listaCursosAcademia($id){
   
    $listaFormador=DB::table('cursos')
    ->join('formador','formador.id','=','cursos.id_formador')
    ->join('form_acad','form_acad.id_formador','=','cursos.id_formador')
    ->join('academia','academia.id','=','form_acad.id_academia')
    ->join('categorias','categorias.id','=','cursos.id_categoria')
    ->join('users','users.id','=','formador.id_user')
    ->select('cursos.id','cursos.curso_nome','cursos.curso_duracao','cursos.curso_img','cursos.curso_data','cursos.curso_preco','categorias.cat_nome')
    ->where('academia.id',$id)
    ->orderBy('cursos.id','desc')
    ->paginate(10);
    return $listaFormador;
}


public function searche($filter = null){

    $results=$this->where(function ($query) use ($filter){
        if($filter){
            $query->where('curso_nome','like',"%{$filter}%");
        }
    })->paginate(5);
   // dd($results);
return $results; 
}

//listar cursos por categoria
public static function listaCursoCategoria($id){
   
    $listaFormador=DB::table('cursos')
    ->join('categorias','categorias.id','=','cursos.id_categoria')
    
    ->select('cursos.id','cursos.curso_nome','cursos.curso_duracao','cursos.curso_descricao','cursos.curso_img','cursos.curso_data','cursos.curso_preco','categorias.cat_nome','cursos.curso_status')
    ->where('categorias.id',$id)
    ->orderBy('cursos.id','desc')
    ->paginate(10);
    return $listaFormador;
}





}
