<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Pedido extends Model
{
    protected $fillable = [
        'user_id',
        'status'
    ];

    public function pedido_cursos()
    {
        return $this->hasMany('App\Models\PedidoCurso')
            ->select( DB::raw('curso_id, sum(valor) as valores, count(1) as qtd') )
            ->groupBy('curso_id')
            ->orderBy('curso_id', 'desc');
    }

    public function pedido_cursos_itens()
    {
        return $this->hasMany('App\Models\PedidoCurso');
    }

    public static function consultaId($where)
    {
        $pedido = self::where($where)->first(['id']);
        return !empty($pedido->id) ? $pedido->id : null;
    }

    public static function cursoPr($id){
   
        $listaFormador=DB::table('pedidos')
        ->join('users','users.id','=','pedidos.user_id')
        ->join('pedidos_cursos','pedidos_cursos.pedido_id','=','pedidos.id')
        ->join('cursos','cursos.id','=','pedidos_cursos.curso_id')
        ->select('pedidos_cursos.curso_id','cursos.curso_nome','cursos.curso_preco','cursos.curso_img','pedidos_cursos.created_at','pedidos_cursos.status')
        ->where('users.id',$id)
        ->orderBy('pedidos_cursos.id','desc')
        ->get();
        return $listaFormador;
    }

    //relatorios de vendas
    
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

    
    //função para pagamento de curso
    public static function cursoPagamento($id){
        $user = Auth::id();
        $listaFormador=DB::table('pedidos')
        ->join('users','users.id','=','pedidos.user_id')
        ->join('pedidos_cursos','pedidos_cursos.pedido_id','=','pedidos.id')
        ->join('cursos','cursos.id','=','pedidos_cursos.curso_id')
        ->select('pedidos_cursos.status','pedidos_cursos.curso_id','pedidos_cursos.pedido_id','pedidos_cursos.id')
        ->where('pedidos_cursos.curso_id',$id)
        ->where('pedidos.user_id',$user)
        ->paginate(1);
        return $listaFormador;
    }

}
