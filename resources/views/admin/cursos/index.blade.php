@extends('layouts.admin')

@section('content')

		
		<div class="base-geral">
        <div class="caixa">
			<h2 class="titulo"><span class="case"></i>Cursos</span></h2>
        </div>
        
        <table	class="table-relatorio">	
	<tr class="table-relatorio-tr">	
	
	

	<th>Nome do curso</th>
	<th>Data</th>
	<th>Preço</th>
	<th>Formador</th>
	<th>Status</th>

	
	
	</tr>
@foreach ($listaCursos as $curso)
<tr>

<td><a href="/admin_curso/{{$curso->id}}">{{$curso->curso_nome}}</a></td>
<td>{{$curso->curso_data}}</td>

<td>{{$curso->curso_preco}} kz</td>
    

<td>{{$curso->name}}</td>

@if($curso->curso_status==0)

<td>
    
    
    <a  href="/on/{{$curso->id}}" class="btn btn-danger">Off</a>
</td>

@endif

@if($curso->curso_status==1)

<td>
    
<a  href="/off/{{$curso->id}}" class="btn btn-success">On</a>
</td>

@endif

@if($curso->curso_status==3)

<td><a class="btn btn-warning">Público</a></td>

@endif




@endforeach
</table><br>
{!! $listaCursos->links() !!}
</div>
</div>



@endsection
