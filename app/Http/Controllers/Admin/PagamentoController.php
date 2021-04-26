<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorias;
use App\Models\Cursos;
use App\Models\Pedido;
use App\Models\Aluno;
use App\Models\Formador;
use App\Models\PedidoCurso;
use App\Models\relatoriodecompras;
use App\Models\relatoriodeVendas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PagamentoController extends Controller
{
    public function pagamento($id){
        $listaCategorias=Categorias::all();
        $curso = Cursos::find($id);
        $compras = Pedido::cursoPagamento($id);
        
       
       
        
        
        return view('admin.pagamento.index',compact('listaCategorias','curso','compras'));
    }
    
    
    public function store(Request $req)
    {
        $this->middleware('VerifyCsrfToken');

        
        $idpedido  = $req->input('pedido_id');
		$curso_id  = $req->input('curso_id');
		$id        = $req->input('id');
		$comprovativo = $req->file('curso_comprovativo');
		if($req->file('curso_comprovativo')->isValid()){
		     $comprovativo = $req->file('curso_comprovativo')->store('pagamentos');
		}
		
		
		if($comprovativo == null)
		{
		     return redirect()->back()->withInput()->withErrors(['Comprovativo não anexado']);    
		}
		
        $idusuario = Auth::id();
        
        $recebe = Aluno::listarAlunologado($idusuario);
        
        $id_aluno = $recebe[0]->id;
       
        
       

        $check_pedido = Pedido::where([
            'id'      => $idpedido,
            'user_id' => $idusuario,
            'status'  => 'PE' // PENDENTE
            ])->exists();

        
        
        
        if( !$check_pedido ) {
            $req->session()->flash('mensagem-falha', 'Pedido não encontrado!');
            return redirect()->back();
        }

        $check_cursos = PedidoCurso::where([
            'pedido_id' => $idpedido,
			'curso_id' => $curso_id
            ])->exists();
            
            
         
        if(!$check_cursos) {
            $req->session()->flash('mensagem-falha', 'Produtos do pedido não encontrados!');
            return redirect()->back();
        }

        PedidoCurso::where([
            'pedido_id' => $idpedido,
			'curso_id' => $curso_id
            ])->update([
                'status' => 'PE'
                
            ]);
        Pedido::where([
                'id' => $idpedido
            ])->update([
                'status' => 'PE'
            ]);
            
       DB::table('pagamentos')->insert(['id_aluno'=>$id_aluno,'id_pedido'=>$id,'comprovante'=>$comprovativo,'created_at'=>date("Y-m-d H:i:s")]);
        
           
             
        
        
           
        
    
            
            

        $req->session()->flash('mensagem-sucesso', 'Compra concluída com sucesso!');

        
        return redirect()->route('carrinho.compras');
        
        //->route('carrinho.compras');
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
            
          
          //      dd($listCursos);
   
            return view('admin.pagamento.relatoriodecompras', compact('listCursos'));
    
 }



public function relatoriodeVendas()
    {
                
        $this->middleware('VerifyCsrfToken');

        $req = Request();
            $idusuario = Auth::id();
            /* contas */
            $buscarFormador=Formador::listarFormadorlogado(auth()->user()->id);

            $id_formador    = $buscarFormador[0]->id;
                 
            $id_email       = $buscarFormador[0]->email;
                 
            $id_name        =  $buscarFormador[0]->name;
                 
            $formador_conta = $buscarFormador[0]->conta_bancaria;

            $saldo  =Formador::formadorFinancas($buscarFormador[0]->id);
            $saidas =Formador::formadorSolicitacao($buscarFormador[0]->id);
            $entrada = 0;
                
            $calcularEntrada  = Formador::formadorFinancasEntrada($buscarFormador[0]->id);

             //inicio do calculo da data
             $ganho_dia = 0;
             $dia = date('Y-m-d');
             
             
              
             foreach($calcularEntrada as $calculo)
                {    
                    $dateString =  $calculo->created_at;
                    $dateTimeObj = date_create($dateString);
                    $novaData = date_format($dateTimeObj, 'Y-m-d');
                    
                    if($novaData == $dia)
                    {
                     
                     $ganho_dia += $calculo->valor;
                        
                    }
                    
                }
                $saldoContabilistico=$saldo[0]->valor*0.7;
                //saldo de entrada ou seja, saldo feito na plataforma 
                $entrada = $saldo[0]->valor*0.7;
                    
                    //saldo disponivel
                    if($saidas[0]->valor_retirado==null)
                    {
                        $saldoDisponivel = $saldoContabilistico;
                        $saida = 0;
                    }
                    else
                    {
                        $saldoDisponivel = $saldoContabilistico-$saidas[0]->valor_retirado; 
                        $saida = $saidas[0]->valor_retirado;
                    }                
                
            //End_Contas//

            if(request()->ajax)
            {
                if(!empty($request->from_date))
                {
                    $data = DB::table('pedidos')->whereBetween('curso_data', array($request->from_date,$request->to_date))->get();
                }
                return datatables()->of($data)->make(true);
            }

        /*$check_pedido = Pedido::where([
            'id'      => $idpedido,
            'user_id' => $idusuario,
            'status'  => 'RE' // Reservada
            ])->exists();*/
            $listCursos=Pedido::relatVendas($idusuario);            
       return view('admin.pagamento.relatoriodeVendas', compact('listCursos','ganho_dia','saldoDisponivel','saldoContabilistico','saida','entrada'));    

}

public function filtro(Request $request)
{
    $this->middleware('VerifyCsrfToken');

    $req = Request();
        $idusuario = Auth::id();
        /* contas */
        $buscarFormador=Formador::listarFormadorlogado(auth()->user()->id);

        $id_formador    = $buscarFormador[0]->id;
             
        $id_email       = $buscarFormador[0]->email;
             
        $id_name        =  $buscarFormador[0]->name;
             
        $formador_conta = $buscarFormador[0]->conta_bancaria;

        $saldo  =Formador::formadorFinancas($buscarFormador[0]->id);
        $saidas =Formador::formadorSolicitacao($buscarFormador[0]->id);
        $entrada = 0;
            
        $calcularEntrada  = Formador::formadorFinancasEntrada($buscarFormador[0]->id);

         //inicio do calculo da data
         $ganho_dia = 0;
         $dia = date('Y-m-d');
         
         
          
         foreach($calcularEntrada as $calculo)
            {    
                $dateString =  $calculo->created_at;
                $dateTimeObj = date_create($dateString);
                $novaData = date_format($dateTimeObj, 'Y-m-d');
                
                if($novaData == $dia)
                {
                 
                 $ganho_dia += $calculo->valor;
                    
                }
                
            }
            $saldoContabilistico=$saldo[0]->valor*0.7;
            //saldo de entrada ou seja, saldo feito na plataforma 
            $entrada = $saldo[0]->valor*0.7;
                
                //saldo disponivel
                if($saidas[0]->valor_retirado==null)
                {
                    $saldoDisponivel = $saldoContabilistico;
                    $saida = 0;
                }
                else
                {
                    $saldoDisponivel = $saldoContabilistico-$saidas[0]->valor_retirado; 
                    $saida = $saidas[0]->valor_retirado;
                }           
                 
        /*
        */    
        $fromDate = $request->input('from_date'); 
        $toDate   = $request->input('to_date');     
        
        if($request->ajax())
        {
            if($request->from_date != '' && $request->to_date != '')
            {
                $data = DB::table('pedidos')
                ->join('users','users.id','=','pedidos.user_id')
                ->join('pedidos_cursos','pedidos_cursos.pedido_id','=','pedidos.id')
                ->join('cursos','cursos.id','=','pedidos_cursos.curso_id')
                ->select('pedidos_cursos.curso_id','cursos.curso_nome','cursos.curso_preco','pedidos_cursos.created_at')
                ->whereBetween('date', array($request->from_date, $request->to_date))
                ->get();
            }
            else
            {
                    echo "error";  
            }
            echo json_encode($data);
        }

        $listCursos=DB::table('pedidos')
        ->join('users','users.id','=','pedidos.user_id')
        ->join('pedidos_cursos','pedidos_cursos.pedido_id','=','pedidos.id')
        ->join('cursos','cursos.id','=','pedidos_cursos.curso_id')
        ->select('pedidos_cursos.curso_id','cursos.curso_nome','cursos.curso_preco','pedidos_cursos.created_at')
        ->whereBetween('pedidos_cursos.created_at',array($fromDate,$toDate))
        ->where('users.id',$idusuario)           
        ->orderBy('pedidos_cursos.created_at','asc')
        ->get();
        
     
        

       return view('admin.pagamento.filtro', compact('toDate','fromDate','listCursos','ganho_dia','saldoDisponivel','saldoContabilistico','saida','entrada'));    


}
 
        
}
