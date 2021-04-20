@extends('layouts.admin')
@section('content')
<
		@include('layouts.menu')

				</head>
				<body>
				
			


			
  <table class="table table-hover mg-b-0">
	
	 

	<thead>
	  <tr>
	<th>Nome do curso</th>
	<th>Data</th>
	<th>Preco total</th>
	<th>Status</th>
    </tr>
	</thead>
	
<tbody>
@foreach ($listCursos as $curso)
   <tr>
<td>{{$curso->curso_nome}}</td>
<td>{{$curso->curso_data}}</td>

<td>{{$curso->curso_preco}}</td>



@if ($curso->status=='PA')

	<td>Pago</td>
	@endif
@if($curso->status=='PE')

<td>Pendente</td>
@endif
 </tr>
	
@endforeach
</tbody>
	 
	


	






</table>		

</div>



@endsection
	


