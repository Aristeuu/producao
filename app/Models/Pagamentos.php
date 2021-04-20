<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Pagamentos extends Model
{
    protected $table="pagamentos";
    protected $fillable = ['id','id_aluno','id_pedido','comprovante','created_at','update_at'];
 


    public static function cursoComprovante($id1){       
        $listaFormador=DB::table('pagamentos')
        ->join('users','users.id', '=','pagamentos.id_aluno')        
        ->select('users.name','pagamentos.id','pagamentos.id_aluno','pagamentos.id_pedido','pagamentos.comprovante','pagamentos.created_at','pagamentos.updated_at')
        
        ->where('pagamentos.id_aluno',$id1)
        ->get();
        return $listaFormador;
    }

    
    public static function relatVendas($id){
   
        $listaFormador=DB::table('pedidos')
        ->join('users','users.id','=','pedidos.user_id')
        ->join('pedidos_cursos','pedidos_cursos.pedido_id','=','pedidos.id')
        ->join('cursos','cursos.id','=','pedidos_cursos.curso_id')
        ->select('pedidos_cursos.curso_id','cursos.curso_nome','cursos.curso_preco','pedidos_cursos.created_at')
        ->where('users.id',$id)        
        ->orderBy('cursos.id','desc')
        ->get();
        return $listaFormador;
    }





 







}
