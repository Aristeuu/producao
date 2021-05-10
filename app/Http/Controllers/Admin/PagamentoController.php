<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorias;
use App\Models\Cursos;
use App\Models\Pedido;
use App\Models\Aluno;
use App\Models\Formador;
use App\Models\Coproducao;
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
        $categoria = Categorias::find($curso->id_categoria);  
       
       
       //dd($categoria);
        
        return view('admin.pagamento.index',compact('categoria','curso','compras'));
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
                'status' => 'PA'
                
            ]);
        Pedido::where([
                'id' => $idpedido
            ])->update([
                'status' => 'PA'
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

           
            $alunosCurso=Formador::alunosCursos($buscarFormador[0]->id);
           // dd($alunosCurso);
            $listMeuscursos=Cursos::listaCursosForm($id_formador);
           // dd($alunosCurso);

           // dd($alunosCurso);
            $totalSaldos=0;
            foreach($alunosCurso as $lista){
                $totalSaldos=$totalSaldos+$lista->valor;
            }        
        //dd($alunosCurso);
                $totalSaldo=$totalSaldos*0.70;
               
       

                $saldo  =Formador::formadorFinancas($buscarFormador[0]->id);
                $sald   = Formador::CoprodutorFinancas($buscarFormador[0]->id); 
              
                $saidas =Formador::formadorSolicitacao($buscarFormador[0]->id);
                $entrada = 0;
                $saldoCursos = 0;
                $saldoCursosFoprod = 0;
                $saldoCursosCoprod = 0;
             
                
            

           // $production = Coproducao::CursoPercent($buscarFormador[0]->id);
            
           // $coproduction=Coproducao::CoprodPercent($buscarFormador[0]->id);
           
          
               //calcular saldo do formador de produção baseada na percentagem por curso  
               foreach($saldo as $pos)
                {
                    foreach($listMeuscursos as $prod)
                    {
                        //se o curso pago for igual ao curso produzido pega a percentagem, calcula e acumula
                        if($pos->curso_id == $prod->id)
                        {
                            $percentagem = $prod->coprod_percent;
                            $id_coprodutor= $prod->id_coprodutor;
                         
                            if($percentagem==null && $id_coprodutor == null )
                            {
                                $saldoCursoprod = $pos->curso_valorReal;
                                $saldoCursos += $saldoCursoprod;
                               // dd($saldoCursos);
                                
                               
                                
                            }
                            if($percentagem!=null && $id_coprodutor!=null)
                            {
                                
                                $saldoCurso = $pos->curso_valorReal;
                                $percentagemF = 100-$percentagem;
                                
                                $saldoCursosFoprod += $saldoCurso*($percentagemF/100);

                               

                              // dd($saldoCursosFoprod);
                               

                            }                                               
                                                      
                         //  $saldoCursos += $saldoCurso*($percentagemFormador/100);

                            //dd($saldoCursos);
                             
                        }
                    }


                }
            //

           // $coproduction=Coproducao::CoprodPercent($buscarFormador[0]->id);
            //dd($coproduction);
            if($sald->isNotEmpty())
               {               
                             
                //calcular saldo do coprodutor baseada na percentagem por curso
                //calcular saldo do formador baseada na percentagem por curso 
               foreach($sald as $sac)
               {
                   foreach($listMeuscursos as $coprod)
                   {
                       //se o curso pago for igual ao curso produzido pega a percentagem, calcula e acumula
                       if($sac->curso_id == $coprod->id)
                       {
                          
                            
                        $percentagemCoprod = $coprod->coprod_percent;   
                                          
                           $saldoCursoCoprod = $sac->curso_valorReal;
                          
                          $saldoCursosCoprod += $saldoCursoCoprod*($percentagemCoprod/100);
                         
                           //dd($saldoCursos);
                            
                       }
                   }


               }



               }
            //  
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
                 
               //saldo contabilistico eh a soma de do saldo produzido e do saldoCoproduzido
               $saldoContabilistico=$saldoCursos+$saldoCursosFoprod+$saldoCursosCoprod;
               //saldo de entrada ou seja, saldo feito na plataforma 
               $entrada = $saldoCursos+$saldoCursosFoprod+$saldoCursosCoprod;

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
                      
       return view('admin.pagamento.relatoriodeVendas', compact('id_formador','alunosCurso','totalSaldo','listCursos','ganho_dia','saldoDisponivel','saldoContabilistico','saida','entrada'));    

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
        $listMeuscursos=Cursos::listaCursosForm($id_formador);

      
        $saldo  =Formador::formadorFinancas($buscarFormador[0]->id);
        $sald   = Formador::CoprodutorFinancas($buscarFormador[0]->id); 
      
        $saidas =Formador::formadorSolicitacao($buscarFormador[0]->id);
        $entrada = 0;
        $saldoCursos = 0;
        $saldoCursosFoprod = 0;
        $saldoCursosCoprod = 0;
     
             
                
            

           // $production = Coproducao::CursoPercent($buscarFormador[0]->id);
            
           
           
          
           //calcular saldo do formador baseada na percentagem por curso 
           foreach($saldo as $pos)
                {
                    foreach($listMeuscursos as $prod)
                    {
                        //se o curso pago for igual ao curso produzido pega a percentagem, calcula e acumula
                        if($pos->curso_id == $prod->id)
                        {
                            $percentagem = $prod->coprod_percent;
                            $id_coprodutor= $prod->id_coprodutor;
                         
                            if($percentagem==null && $id_coprodutor == null )
                            {
                                $saldoCursoprod = $pos->curso_valorReal;
                                $saldoCursos += $saldoCursoprod;
                               // dd($saldoCursos);
                                
                               
                                
                            }
                            if($percentagem!=null && $id_coprodutor!=null)
                            {
                                
                                $saldoCurso = $pos->curso_valorReal;
                                $percentagemF = 100-$percentagem;
                                
                                $saldoCursosFoprod += $saldoCurso*($percentagemF/100);

                               

                              // dd($saldoCursosFoprod);
                               

                            }                                               
                                                      
                         //  $saldoCursos += $saldoCurso*($percentagemFormador/100);

                            //dd($saldoCursos);
                             
                        }
                    }


                }
            //

           // $coproduction=Coproducao::CoprodPercent($buscarFormador[0]->id);
           if($sald->isNotEmpty())
           {               
                         
            //calcular saldo do coprodutor baseada na percentagem por curso
            //calcular saldo do formador baseada na percentagem por curso 
           foreach($sald as $sac)
           {
               foreach($listMeuscursos as $coprod)
               {
                   //se o curso pago for igual ao curso produzido pega a percentagem, calcula e acumula
                   if($sac->curso_id == $coprod->id)
                   {
                      
                        
                    $percentagemCoprod = $coprod->coprod_percent;   
                                      
                       $saldoCursoCoprod = $sac->curso_valorReal;
                      
                      $saldoCursosCoprod += $saldoCursoCoprod*($percentagemCoprod/100);
                     
                       //dd($saldoCursos);
                        
                   }
               }


           }



           }
         
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
            //saldo contabilistico eh a soma de do saldo produzido e do saldoCoproduzido
            $saldoContabilistico=$saldoCursos+$saldoCursosFoprod+$saldoCursosCoprod;
            //saldo de entrada ou seja, saldo feito na plataforma 
            $entrada = $saldoCursos+$saldoCursosFoprod+$saldoCursosCoprod;
           

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
     
        
        $alunosCurso=DB::table('pedidos_cursos')
        ->join('pedidos', 'pedidos.id', '=', 'pedidos_cursos.pedido_id')
        ->join('users', 'users.id', '=', 'pedidos.user_id')             
        ->join('cursos', 'cursos.id', '=', 'pedidos_cursos.curso_id')
        ->join('aluno','aluno.id_user', '=', 'users.id')
        ->join('formador', 'formador.id', '=', 'cursos.id_formador')
        ->select('pedidos_cursos.valor','pedidos_cursos.status','pedidos_cursos.created_at','users.name','users.email','users.id','cursos.curso_nome','users.foto')
        ->whereBetween('pedidos_cursos.created_at',array($fromDate,$toDate))
        ->where('formador.id',$id_formador)                
        ->orderBy('pedidos_cursos.created_at','asc')
        ->get();

        $CursosPagos=DB::table('pedidos_cursos')
        ->join('pedidos', 'pedidos.id', '=', 'pedidos_cursos.pedido_id')
        ->join('users', 'users.id', '=', 'pedidos.user_id')             
        ->join('cursos', 'cursos.id', '=', 'pedidos_cursos.curso_id')
        ->join('aluno','aluno.id_user', '=', 'users.id')
        ->join('formador', 'formador.id', '=', 'cursos.id_formador')
        ->select('pedidos_cursos.valor','pedidos_cursos.status','pedidos_cursos.created_at','users.name','users.email','users.id','cursos.curso_nome','users.foto')
        ->whereBetween('pedidos_cursos.created_at',array($fromDate,$toDate))
        ->where('formador.id',$id_formador) 
        ->where('pedidos_cursos.status','PA')               
        ->orderBy('pedidos_cursos.created_at','asc')
        ->get();
        
        
        $totalSaldos=0;
        foreach($CursosPagos as $lista){
            $totalSaldos=$totalSaldos+$lista->valor;
        }        
    
            $totalSaldo=$totalSaldos*0.70;

           // dd($totalSaldo);
        
     
        

       return view('admin.pagamento.filtro', compact('totalSaldo','alunosCurso','toDate','fromDate','ganho_dia','saldoDisponivel','saldoContabilistico','saida','entrada'));    


}
 
        
}
