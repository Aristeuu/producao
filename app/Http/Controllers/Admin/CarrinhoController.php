<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorias;
use App\Models\Cursos;
use App\Models\Pedido;
use App\Models\PedidoCurso;
use App\Models\relatoriodecompras;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CarrinhoController extends Controller
{
    function __construct()
    {
        // obriga estar logado;
        //$this->middleware('auth');
    }

    public function index()
    {

        if(Auth::check()===true){
            $pedidos = Pedido::where([
                'status'  => 'RE',
                'user_id' => Auth::id()
                ])->get();
             //dd($pedidos);
            return view('carrinho.index', compact('pedidos'));
         
     }
     
      return redirect()->route('admin.login');
    }

    public function adicionar()
    {

        if(Auth::check()===true){
            $this->middleware('VerifyCsrfToken');
    
            $req = Request();
            $id_curso = $req->input('id');
         
            $curso = Cursos::find($id_curso);
           
            if( empty($curso->id) ) {
                $req->session()->flash('mensagem-falha', 'Produto não encontrado em nossa loja!');
                return redirect()->route('detalhes');
            }
    
            $idusuario = Auth::id();
            dd($curso);
           
    
           /* $idpedido = Pedido::consultaId([
                'user_id' => $idusuario,
                'status'  => 'PE' // Reservada
                ]);*/
    
            
           /* if( empty($idpedido) ) {
                $pedido_novo = Pedido::create([
                    'user_id' => $idusuario,
                    'status'  => 'PE'
                    ]);
    
                $idpedido = $pedido_novo->id;
    
            }*/
    
            $where_curso = [
                'pedido_id'  => $idpedido,
                'curso_id' => $id_curso
            ];
    
            
            $curso1= PedidoCurso::where($where_curso)->orderBy('id', 'desc')->first();
           // dd($curso->curso_preco);
        if($curso1!=null)
        return redirect()->route('detalhes');
            PedidoCurso::create([
                'pedido_id'  => $idpedido,
                'curso_id' =>   $id_curso,
                'valor'      => $curso->curso_preco,
                'status'     => 'PE'
                ]);
    
            $req->session()->flash('mensagem-sucesso', 'Curso adicionado ao carrinho com sucesso!');
    
            return redirect()->route('carrinho.compras');
    
        }
        
      return redirect()->route('admin.login');  
    

    }
    public function comprar()
    {
        if(Auth::check()===true){
            $this->middleware('VerifyCsrfToken');

            $req = Request();
            $id_curso = $req->input('id');
         
            $curso = Cursos::find($id_curso);
            $idusuario = Auth::id();


            $id_pedido = DB::table('pedidos')->insertGetId(
                ['user_id' => $idusuario,'status'=>'PE','created_at'=>date('Y-m-d')]  );


            if(DB::table('pedidos_cursos')->insert(['pedido_id' => $id_pedido,'curso_id'=>$curso->id,'valor'=>$curso->curso_preco,'status'=>'PE','created_at'=>date('Y-m-d')])){
               
                return redirect()->route('carrinho.compras');
            }    

          



        }
        else
        {
            return redirect()->back();
        }    

    }

    

    public function remover()
    {

        $this->middleware('VerifyCsrfToken');

        $req = Request();
        $idpedido           = $req->input('pedido_id');
        $id_curso          = $req->input('curso_id');
        $remove_apenas_item = (boolean)$req->input('item');
        $idusuario          = Auth::id();

        $idpedido = Pedido::consultaId([
            'id'      => $idpedido,
            'user_id' => $idusuario,
            'status'  => 'RE' // Reservada
            ]);

        if( empty($idpedido) ) {
            $req->session()->flash('mensagem-falha', 'Pedido não encontrado!');
            return redirect()->route('carrinho.index');
        }

        $where_curso = [
            'pedido_id'  => $idpedido,
            'curso_id' => $id_curso
        ];

        $curso= PedidoCurso::where($where_curso)->orderBy('id', 'desc')->first();
        if( empty($curso->id) ) {
            $req->session()->flash('mensagem-falha', 'Produto não encontrado no carrinho!');
            return redirect()->route('carrinho.index');
        }

        if( $remove_apenas_item ) {
            $where_curso['id'] = $curso->id;
        }
        PedidoCurso::where($where_curso)->delete();

        $check_pedido = PedidoCurso::where([
            'pedido_id' => $curso->pedido_id
            ])->exists();

        if( !$check_pedido ) {
            Pedido::where([
                'id' => $curso->pedido_id
                ])->delete();
        }

        $req->session()->flash('mensagem-sucesso', 'Produto removido do carrinho com sucesso!');

        return redirect()->route('carrinho.index');
    }

    public function concluir()
    {
        $this->middleware('VerifyCsrfToken');

        $req = Request();
        $idpedido  = $req->input('pedido_id');
        $idusuario = Auth::id();

        $check_pedido = Pedido::where([
            'id'      => $idpedido,
            'user_id' => $idusuario,
            'status'  => 'RE' // Reservada
            ])->exists();

        if( !$check_pedido ) {
            $req->session()->flash('mensagem-falha', 'Pedido não encontrado!');
            return redirect()->route('carrinho.index');
        }

        $check_cursos = PedidoCurso::where([
            'pedido_id' => $idpedido
            ])->exists();
        if(!$check_cursos) {
            $req->session()->flash('mensagem-falha', 'Produtos do pedido não encontrados!');
            return redirect()->route('carrinho.index');
        }

        PedidoCurso::where([
            'pedido_id' => $idpedido
            ])->update([
                'status' => 'PE'
            ]);
        Pedido::where([
                'id' => $idpedido
            ])->update([
                'status' => 'PE'
            ]);

        $req->session()->flash('mensagem-sucesso', 'Compra concluída com sucesso!');

        
        return redirect()->route('carrinho.compras');
        
        //->route('carrinho.compras');
    }

    public function compras()
    {

        $src = config('app.image');
        //dd($src);

        $compras = Pedido::where([
            'user_id' => Auth::id()            
            ])->orderBy('created_at', 'desc')->get();
        
        $cancelados = Pedido::where([
            'status'  => 'CA',
            'user_id' => Auth::id()
            ])->orderBy('updated_at', 'desc')->get();
            
       $listaCursos=Cursos::listaCursosAluno();

      // dd($compras);

        return view('carrinho.compras', compact('compras', 'cancelados','listaCursos','src'));

    }

    public function cancelar()
    {
        $this->middleware('VerifyCsrfToken');

        $req = Request();
        $idpedido       = $req->input('pedido_id');
        $idspedido_prod = $req->input('id');
        $idusuario      = Auth::id();

        if( empty($idspedido_prod) ) {
            $req->session()->flash('mensagem-falha', 'Nenhum item selecionado para cancelamento!');
            return redirect()->route('carrinho.compras');
        }

        $check_pedido = Pedido::where([
            'id'      => $idpedido,
            'user_id' => $idusuario,
            'status'  => 'PA' // Pago
            ])->exists();

        if( !$check_pedido ) {
            $req->session()->flash('mensagem-falha', 'Pedido não encontrado para cancelamento!');
            return redirect()->route('carrinho.compras');
        }

        $check_cursos = PedidoCurso::where([
                'pedido_id' => $idpedido,
                'status'    => 'PA'
            ])->whereIn('id', $idspedido_prod)->exists();

        if( !$check_cursos) {
            $req->session()->flash('mensagem-falha', 'Produtos do pedido não encontrados!');
            return redirect()->route('carrinho.compras');
        }

        PedidoCurso::where([
                'pedido_id' => $idpedido,
                'status'    => 'PA'
            ])->whereIn('id', $idspedido_prod)->update([
                'status' => 'CA'
            ]);

        $check_pedido_cancel = PedidoCurso::where([
                'pedido_id' => $idpedido,
                'status'    => 'PA'
            ])->exists();

        if( !$check_pedido_cancel ) {
            Pedido::where([
                'id' => $idpedido
            ])->update([
                'status' => 'CA'
            ]);

            $req->session()->flash('mensagem-sucesso', 'Compra cancelada com sucesso!');

        } else {
            $req->session()->flash('mensagem-sucesso', 'Item(ns) da compra cancelado(s) com sucesso!');
        }

        return redirect()->route('carrinho.compras');
    }

public function relatoriodecompras()
    {
        $this->middleware('VerifyCsrfToken');

        $req = Request();
            $idusuario = Auth::id();

        /*$check_pedido = Pedido::where([
            'id'      => $idpedido,
            'user_id' => $idusuario,
            'status'  => 'RE' // Reservada
            ])->exists();*/
            $listCursos=Pedido::cursoPr($idusuario);
    
                
   
            return view('pagamento.relatoriodecompras', compact('listCursos'));
    
 }



}
