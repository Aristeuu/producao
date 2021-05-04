<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CoproducaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
		$id_curso           = $request->input('id_curso');
        $id_formador        = $request->input('id_formador');
        $id_cop             = $request->input('id_coP');
        $statusYeto         = $request->input('coYeto');
        $percenC            = $request->input('percenC');
        $percenF            = 90;       
        
        
        /*if($statusYeto==null)
        {
            $status = false;
            $percenF = $percenF - $percenC;
        }
        else
        {
            $status = true;
           // $percenF = $percenF - $percenC - 50;

        }*/
       
        if($percenF<=0)
        {
            return redirect()->back();    
        }
        if($statusYeto==null && $percenC==null)
        {
            return redirect()->back();    
        }
        if($id_cop!=null && $percenC==null)
        {
            return redirect()->back();  
        }      
        
        if($statusYeto!=null && $percenC==null)
        {
            $id_cop=null; 
            $status = true; 
            $percenF = $percenF - 50;

        }
        if($id_cop != null &&  $percenC != null )
        {
            $status  = null;
            $percenF = $percenF - $percenC;
         
        }
        

        if(DB::table('coproducao')
            ->where('id_curso',$id_curso)       
            ->update(['id_curso'=>$id_curso,'id_cop'=>$id_cop,'statusYeto'=>$status,'percenF'=>$percenF,'percenC'=>$percenC]))
            {
                return redirect()->back();
            }
        
        
        
	
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function meusCursos()
    {
        //
        return view('negocio.coprodutor.cursos');
    }
}
