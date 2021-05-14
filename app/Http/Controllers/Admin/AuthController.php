<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Aulas;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Categorias;
use App\Models\Operacoes;
use App\Models\Cursos;
use App\Models\Formador;
use App\Models\Modulos;
use App\Models\Coproducao;
use App\Models\Pedido;
use App\Models\Sobre;
use App\Models\AcademiaFormador;
use App\Models\Academia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    
    
    public function dashboard(){
        if(Auth::check()===true && auth()->user()->users_status==1){
        if(auth()->user()->tipo=="formador"){
            //    $listaPessoa=Formador::listarFormadorlogado(auth()->user()->id);
                 //$listMeuscursos=Cursos::listaCursosForm(auth()->user()->id);
                 $listaFormador=Formador::ListarFormadorLogado(auth()->user()->id);
                 $listaCategoria=Categorias::all();
                 $listaModulos  =Modulos::listaModulo();
                
                 $buscarFormador=Formador::listarFormadorlogado(auth()->user()->id);
                 $id_formador = $buscarFormador[0]->id; 
                 $listMeuscursos=Cursos::listaCursosForm($id_formador);
                 $conta=$listMeuscursos->count();
                 
               
                 $id_formador = $buscarFormador[0]->id;
                 
                 $id_email    = $buscarFormador[0]->email;
                 
                 $id_name     =  $buscarFormador[0]->name;
                 
                 $formador_conta = $buscarFormador[0]->conta_bancaria;
                 //$formador_iban  = $buscarFormador[0]->iban;
                 //$formador_titular = $buscarFormador[0]->titular;
                                                                   
                $saldo  =Formador::formadorFinancas($buscarFormador[0]->id);
               $sald   = Formador::CoprodutorFinancas($buscarFormador[0]->id); 
              
                $saidas =Formador::formadorSolicitacao($buscarFormador[0]->id);
                $entrada = 0;
                $saldoCursos = 0;
                $saldoCursosFoprod = 0;
                $saldoCursosCoprod = 0;
             
                
                $calcularEntrada  = Formador::formadorFinancasEntrada($buscarFormador[0]->id);

                //$production = Coproducao::CursoPercent($buscarFormador[0]->id);
              
             // dd($sald);
               
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
               
              //  $coproduction=Coproducao::CoprodPercent($buscarFormador[0]->id);
              //  dd($listMeuscursos);
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
             
               //dd($saldoCursosCoprod);
                //inicio do calculo da data
                $dia = date('Y-m-d');
             // dd($saldoCursosCoprod);
                
                foreach($calcularEntrada as $calculo)
                {    
                    $dateString =  $calculo->created_at;
                    $dateTimeObj = date_create($dateString);
                    $novaData = date_format($dateTimeObj, 'Y-m-d');
                    
                    if($novaData == $dia)
                    {
                     
                     $dia += $calculo->valor;
                        
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
                 
                  $Listaoperacoes = Operacoes::select('id','created_at','valor_retirado')->where(['id_formador'=>$id_formador])->orderBy('created_at','desc')->get();
                   
                
                 $listaMigalhas = \json_encode([["titulo"=>"Home","url"=>route('admin')],
                                        ["titulo"=>"Cursos","url"=>route('cursos.index')]]);       
                                        
                                       // $active = $request->is('dashboard') ? "active" : ""; 

                //secção compras
                    
                //fim secção

                return view('admin.home.index',compact('listaMigalhas','listMeuscursos','buscarFormador','saldoContabilistico','saldoDisponivel','saida','id_formador','id_email','id_name','listaFormador','listaCategoria','listaModulos','Listaoperacoes','formador_conta','dia','entrada'));
             }else{
                 if(auth()->user()->tipo=="aluno"){
                    /*$cursos=Cursos::listaCursosAl(auth()->user()->id);
                    $listMeuscursos=Cursos::listaCursos();
                    $contac=$cursos->count();*/

                    $src = config('app.image');
                    //dd($src);
            
                    
                     $compras = Pedido::where(['user_id' => Auth::id()])->orderBy('created_at', 'desc')->get();
                     $cancelados = Pedido::where(['status'  => 'CA','user_id' => Auth::id()])->orderBy('updated_at', 'desc')->get();
                     $listaCursos=Cursos::listaCursosAluno();
                   

                    
                     return view('carrinho.compras', compact('compras', 'cancelados','listaCursos','src'));


                    
                    //return view('carrinho.compras',compact('cursos','contac','listMeuscursos'));

                       
                 }else{
     
                     if(auth()->user()->tipo=="admin"){
                         $contaCat=Categorias::count();
                         $contaSob=Sobre::count();
                         $contaBan=Banner::count();
                         $contaBlog=Blog::count();
                         $contaAula=Aulas::count();
                         $contaModulo=Modulos::count();
                         $contaCursos=Cursos::count();
                        // dd($contaCat);
                         return view('admin.home.index',compact('contaCat','contaSob','contaBan','contaBlog','contaAula','contaModulo','contaCursos'));
                     }else{
                         if(auth()->user()->tipo=="academia"){
                            $idAcademia=Academia::idAcademia(auth()->user()->id);
                            $contaForm=AcademiaFormador::formadorAcademia($idAcademia[0]->id)->count();
                           // dd($listausers);
                             return view('admin.home.index',compact('contaForm'));
                     }
                 }
             }
             
           
         }
     }
     if(Auth::check()===true && auth()->user()->users_status==0)
     {
         return redirect()->back()->withInput()->withErrors(['Acessa o seu email para ativar a sua conta']);
     }
     else{
        return redirect()->route('admin.login');

     }

     
    }
    public function showLoginForm(){
        return view('admin.home.loginform');
    }


    public function login(Request $request){
        if(!filter_var($request->email, FILTER_VALIDATE_EMAIL)){
             return redirect()->back()->withInput()->withErrors(['O email informado não é válido']);
            //$login['success']=false;
            //$login['message']='O email informado não é válido';
               // echo json_encode($login);
                //return;
        }
                $credencias=[
                        'email' => $request->email,
                        'password' => $request->password
                ]   ;     
               
                if(Auth::attempt($credencias)){
                   // $login['success']=true;
                    //$login['message']='O email informado não é válido';
                      //  echo json_encode($login);
                       // return;
                return redirect()->route('admin');
               }

               return redirect()->back()->withInput()->withErrors(['Os dados informados não conferem']);
               //$login['success']=false;
               //$login['message']='Os dados informados não conferem';
                // echo json_encode($login);
                 //return;
                
    }


    public function logout(){
        Auth::logout();
        return redirect()->route('admin');
    }
    
     public function loginAtivacao($var)
    {
        $key = base64_decode($var);
        if(DB::table('users')          
        ->where('email','=',$key)
        ->update(['users_status'=>1]))
    {
       
        return redirect()->route('admin.login');
    }   

        

    }

  

    }

