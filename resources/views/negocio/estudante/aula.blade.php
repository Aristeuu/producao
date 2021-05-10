@extends('layouts.admin')

@section('content')

		@include('layouts.menu')

		


<div id="wrapper" class="d-flex">
	 
<nav class="sidebar">
	<div class="sidebar-progress">
			<div class="progress-indicator sidebar-progress">
					<svg class="progress-indicator-bar progress-indicator-initial" viewBox="0 0 60 60">
					<circle class="progress-indicator-outer" fill="none" stroke="#ccc" stroke-dasharray="190" cy="30" cx="30" r="29"></circle>
					<circle class="progress-indicator-inner" fill="none" stroke-dasharray="180" stroke-dashoffset="180" cy="30" cx="30" r="29" transform="rotate(-90) translate(-60, 0)"></circle>
					
						<text class="progress-indicator-percentage" x="50%" y="55%">0%</text>
					
					</svg>
				  </div>

	</div>

	<ul class="list-group">
	  @foreach($listamodulos as $modulo)
		<li class="list-group-item feat-btn"><i class="fas fa-folder"></i>{{$modulo->modulo_titulo}}
			<span class="fas fa-caret-down fast"></span>
		
		</li>
		<ul class="list-group feat-show">
			@foreach($listAulas as $aulas)
				@if($aulas->modulo_id==$modulo->id)
					<li  data-page-hash="vROx6RoBeD" class="list-group-item list-aula">
          			 @if($aulas->aula_status==0 && $compras[0]->status=='PE')
						<li class="list-group-item"><a href="">{{$aulas->aula_titulo}}</a></li>
					@endif
					@if($aulas->aula_status==2 && $compras[0]->status=='PE')
			   
                 
						<li class="list-group-item"><a href="/aulaestudante/{{$id_curso}}/{{$aulas->id}}">{{$aulas->aula_titulo}}</a></li>
					@endif

					@if($compras[0]->status=='PA')
			
					<li class="list-group-item lista-m">
						<a href="/aulaestudante/{{$aulas->id}}">
			
						
							{{$aulas->aula_titulo}}
			
			
		
						</a>
					</li>
					@endif	
			
			
				</li>
				@endif
			@endforeach
		
			</ul>
	
	   
		@endforeach
	</ul>
</nav>


			


		
		
		







	
<div class="aula-aluno" id="main">

	<div class="br-mainpanel">
      <div class="br-pagebody">
        <div class="">
          <h6 class="br-section-label" style="font-size:1.8em;">Titulo do Curso: {{$primeiraAula[0]->aula_titulo}}</h6>
         

          <div class="row">
            <div class="col-12 col-lg-8 col-xl-9 page-main-content">
              <div class="btn-demo embed-responsive embed-responsive-16by9">
			<iframe src="{{$primeiraAula[0]->aula_link}}" class="embed-responsive-item" allowfullscreen></iframe>
			  </div><!-- btn-demo -->
			  
			  <section>
				  <div class="container">
					  <div class="row">
						  <article class="col-12 col-lg-8 col-xl-9">
							
							<table> 
							<tbody> 
							<tr> 
							<td><img src="https://hotmart.s3.amazonaws.com/membership_area/1c236e4d-ab9d-4f17-ba82-acae9724edc5/Artboard20.png" data-verified="redactor"><br> </td> 
							<td style="padding-top: 11px;"> <p style="text-align: justify; color:black;">Uma das melhores formas de encontrar todos esses dados é por meio da <strong data-redactor-tag="strong">Persona</strong>. Diferentemente de dados demográficos, a persona é uma representação bem mais profunda do seu público-alvo. </p> </td> 
							</tr> 
							<tr> 
							<td><br><br> </td> 
							<td> <p style="text-align: justify; color:black;">Por meio dela, além de informações como idade, sexo e região, você insere dados como: </p> <p><span style="color:#58c5c7" rel="color:#58c5c7" data-verified="redactor" data-redactor-tag="span" data-redactor-style="color:#58c5c7"><strong data-redactor-tag="strong">•</strong></span><strong data-redactor-tag="strong"> Filmes que ela gosta</strong> </p> <p><span style="color:#58c5c7" rel="color:#58c5c7" data-verified="redactor" data-redactor-tag="span" data-redactor-style="color:#58c5c7"><strong data-redactor-tag="strong">•</strong></span><strong data-redactor-tag="strong"> Quantas pessoas moram com ela</strong> </p> <p><span style="color:#58c5c7" rel="color:#58c5c7" data-verified="redactor" data-redactor-tag="span" data-redactor-style="color:#58c5c7"><strong data-redactor-tag="strong">•</strong></span><strong data-redactor-tag="strong"> O que ela faz nas horas vagas</strong> </p> <p><span style="color:#58c5c7" rel="color:#58c5c7" data-verified="redactor" data-redactor-tag="span" data-redactor-style="color:#58c5c7"><strong data-redactor-tag="strong">•</strong></span><strong data-redactor-tag="strong"> Quais são seus sonhos</strong> </p> </td> 
							</tr> 
							</tbody> 
							</table>
							<p><br> </p>
							<p style="text-align: justify; color:black;">Para criar personas para o seu negócio, é necessário que você responda uma série de perguntas sobre seu usuário. Caso ainda não tenha compradores, pesquise em sua audiência o padrão mais recorrente de pessoas que curtem sua página, seus vídeos ou acessam seu site. Conversar com alguns deles também é fundamental para conhecer quais são suas dores. </p>
							<p><br> </p>
							<table> 
							<tbody> 
							<tr> 
							<td><img src="https://hotmart.s3.amazonaws.com/membership_area/ba02e900-182a-433a-ad1e-c28083974221/Artboard21.png" data-verified="redactor"><br> </td> 
							<td style="padding-top: 15px;"> <p style="text-align: justify; color:black;">Para facilitar a criação da sua persona, <strong data-redactor-tag="strong">temos um PDF exclusivo para download</strong>, com o template de personas. Com ele, você saberá facilmente o que deve ser completado para extrair o máximo de inteligência do material. Você pode fazer o download logo abaixo. Com base nessa persona, você será muito mais assertivo na criação de anúncios, e-mails e até no conteúdo do produto. </p> </td> 
							</tr> 
							</tbody> 
							</table>
							<p><br> </p>
							<p style="text-align: justify; color:black;">Quer comentar sobre nossos conteúdos? Acesse a&nbsp;<a href="https://sparkle.hotmart.com/t/Hotmart/comunidade-hotmart"><strong data-redactor-tag="strong">Comunidade Hotmart no Sparkle</strong></a>&nbsp;e interaja com mais empreendedores!&nbsp;<span class="redactor-invisible-space">&#8203;</span> </p></p>
						</article>
					  </div>
				  </div>
			  </section>
            </div><!-- col-sm-3 -->

            <div class="content-related col-12 col-lg-4 col-xl-3 mg-t-20 mg-sm-t-0 complentar">
				<div class="content-related-info">
				<a href="#" class="btn btn-page-done">
				<span class="icon icon-check btn-page-done-icon"></span>
				<span class="btn-page-done-label">Concluido</span>
				</a>
				</div>
		
				<h5 class="fs-1">Arquivo complementar</h5>
				<a href="http://producao.yetoafrica.com/storage/app/public/{{$primeiraAula[0]->aula_conteudo}}" target="_blank">
					<div class="card card-body shadow-base bd-0">
                  conceitos
			  </div>
			  </a>
					
            </div><!-- col-sm-3 -->

          

          

         
		  </div><!-- row -->
		  </div>
</div>
        
          


@endsection

