@extends('layouts.admin')
@section('content')

		@include('layouts.menu')

		<div class="br-pagebody">
			<div class="br-section-wrapper">

		 <pagina tamanho="12">
									<painel titulo="" cor="moviment-das">
									<Aluno_compras v-bind:titulos="['Imagem','Curso','Preço','Data','Status']" v-bind:itens="{{json_encode($listCursos)}}" foto="{{$src}}"></Aluno_compras>
									</painel>    
								</pagina>     
				
				 

		</div>
		</div>
				
			


	





@endsection
	


