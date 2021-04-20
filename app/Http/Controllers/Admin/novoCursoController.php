<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorias;
use App\Models\Cursos;
use App\Models\AcademiaFormador;
use App\Models\Academia;
use App\Models\Formador;
use App\Models\Modulos;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class novoCursoController extends Controller
{
    //
    public function index()
    {
        
        $listaCursos=Cursos::listaCursosForm(auth()->user()->id);
        $listaFormador=Formador::ListarFormadorLogado(auth()->user()->id);
        $listaCategoria=Categorias::all();
        $listaModulos  =Modulos::listaModulo();

              

        return view('admin.home.curso_novo',compact('listaCursos','listaFormador','listaCategoria','listaModulos'));
    }
    public function criar(){
        return;
    }
}
