@extends('layouts.admin')

@section('content')

		@include('layouts.menu')


		<div id="wrapper" class="d-flex">
			<div id="side-bar">
				
				<div id="sidebar-heading">
					<div class="progress-indicator">
					<svg class="progress-indicator-bar progress-indicator-initial" viewBox="0 0 60 60">
					<circle class="progress-indicator-outer" fill="none" stroke="#ccc" stroke-dasharray="190" cy="30" cx="30" r="29"></circle>
					<circle class="progress-indicator-inner" fill="none" stroke-dasharray="180" stroke-dashoffset="180" cy="30" cx="30" r="29" transform="rotate(-90) translate(-60, 0)"></circle>
					
						<text class="progress-indicator-percentage" x="50%" y="55%">0%</text>
					
					</svg>
				  </div>
				</div>
				<div class="collapse-modulos">

		<div id="accordion7" class="accordion accordion-head-colored accordion-inverse mg-t-20" role="tablist" aria-multiselectable="true">
            @foreach($listamodulos as $modulo)
			  <div class="card">
              <div class="card-header" role="tab" id="headingOne7{{$modulo->id}}">
                <h6 class="mg-b-0">
                  <a data-toggle="collapse" data-parent="#accordion7" href="#collapseOne7{{$modulo->id}}" aria-expanded="true" aria-controls="collapseOne7">
                    <svg class="navigation-module-icon svg-theme" viewBox="0 0 19 17">
      <path d="M1.421,15.612 L17.58,15.612 L17.58,4.198 L8.091,4.198 C7.813,4.198 7.56,4.039 7.445,3.791 L6.326,1.387 L1.421,1.387 L1.421,15.612 Z M0.711,17 C0.318,17 0,16.689 0,16.306 L0,0.694 C0,0.31 0.318,0 0.711,0 L6.784,0 C7.062,0 7.315,0.159 7.43,0.406 L8.549,2.81 L18.29,2.81 C18.682,2.81 19,3.121 19,3.504 L19,16.306 C19,16.689 18.682,17 18.29,17 L0.711,17 Z"></path>
  <polygon points="13.0546875 10.6816406 6 10.6816406 6 9 13.0546875 9"></polygon>
  <polygon class="navigation-module-icon-plus text-white" points="13.0546875 10.6816406 6 10.6816406 6 9 13.0546875 9"></polygon>
    </svg>{{$modulo->modulo_titulo}}
                  </a>
                </h6>
              </div><!-- card-header -->

              <div id="collapseOne7{{$modulo->id}}" class="collapse show" role="tabpanel" aria-labelledby="headingOne7{{$modulo->id}}">
                <div class="card-block pd-20">

			<ul class="list-aula navigation-modules list-group" id="navigation-modules" role="tablist">
			@foreach($listAulas as $aulas)

			@if($aulas->modulo_id==$modulo->id)
			<li data-page-hash="vROx6RoBeD" class="navigation-page  list-group-item rounded-top-0">
      
			@if($aulas->aula_status==0 && $compras[0]->status=='PE')
			<a href="">{{$aulas->aula_titulo}}</a>
            @endif

			@if($aulas->aula_status==2 && $compras[0]->status=='PE')
			   <button class="navigation-page-status">
                  <i class="icon-check"></i>
                </button>
                 
			<a href="/aulaestudante/{{$id_curso}}/{{$aulas->id}}">{{$aulas->aula_titulo}}</a>
			@endif

			@if($compras[0]->status=='PA')
			<a href="/aulaestudante/{{$aulas->id}}"><i class="marcado"></i></i>{{$aulas->aula_titulo}}</a>
			@endif	
			
			
			</li>
			@endif
			@endforeach	
			</ul>







                  
                </div>
              </div>
            </div>

@endforeach	
          </div>




				</div>


			</div>
		



	
<div class="aula-aluno">

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

