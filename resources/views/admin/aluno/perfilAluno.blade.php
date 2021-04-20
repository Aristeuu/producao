@extends('layouts.admin')

@section('content')
<div class="site">
		@include('layouts.menu')
		
		
		
	
	

		
	<div class="rows base-perfil py-6">
				<div class="col-12">
				<div class="caixa">
                    
					<div class="rows">
					    	 <form action="/editarperfilAluno/{{auth()->user()->id}}" method="post" enctype="multipart/form-data" token="{{ csrf_token() }}">
                    {{ csrf_field() }}
						<div class="col-12">
						    
						    <div class="col-6">
							
							<div class="thumb">
                            @if(@isset(Auth()->user()->foto))
                                <img src="http://producao.yetoafrica.com/storage/app/public/{{auth()->user()->foto}}">
                                @else
				                  <img src="http://producao.yetoafrica.com/public/backend/img/foto01.png">
                                  @endif
								<input type="file" name="foto">
							</div>
						
						</div>
						<div class="col-6">
							<div class="py-10">
								<label>Nome</label>
							  <input type="text" placeholder="Digita o nome" name="name" value="{{auth()->user()->name}}">
							</div>
							<div class="py-1">
								<label>Email</label>
								<input type="email" placeholder="Digita o email" name="email" value="{{auth()->user()->email}}">
							</div>
							<div class="py-1">
								<label>Senha</label>
								<input type="password" name="password" placeholder="Senha">
							</div>
						</div>
						
					</div>
					
					<fieldset>
					<legend>Dados pessoais</legend>
					<div class="rows">
						<div class="col-3 mb-3">
							<label>BI</label>
							<input type="text" placeholder="005902675LA044" name="bilhete">
						</div>
						<div class="col-3 mb-3">
							<label>Data de nascimento</label>
							<input type="date" name="data_nasc" placeholder="Data">
						</div>
						<div class="col-3 mb-3">
							<label>Telefone</label>
							<input type="text" name="telefone" placeholder="Telefone" value="{{auth()->user()->telefone}}" required>
						</div>
						<div class="col-3 mb-3">
							<label>Profissão</label>
							<input type="text" name="profissao" placeholder="Profissão">
						</div>
					</div>
					</fieldset>
					
					<fieldset>
					<legend>Endereço</legend>
					<div class="rows">
						<div class="col-4 mb-3">
							<label>Bairro</label>
							<input type="text" name="bairro" placeholder="Bairro">
						</div>
						<div class="col-4 mb-3">
							<label>Município</label>
							<input type="text" name="municipio" placeholder="Município">
						</div>
						<div class="col-4 mb-3">
							<label>Província</label>
							<input type="text" name="provincia" placeholder="Endereço">
						</div>
					</div>
				    </fieldset>
				    
				 
<button class="btn btn-outline-info bd-2 d-table m-auto px-5 width-auto" type="submit" >Atualizar perfil</button>
			</form>
				</div>
				</div>
				</div>
		
		
		
		</div>        
	</div>
	
	

@endsection