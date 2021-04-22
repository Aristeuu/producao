@extends('layouts.admin')

@section('content')
<div class="site">
		@include('layouts.menu')
		
		
		
	<div class="br-pagebody">
		<div class="br-section-wrapper">
			<form action="/editarperfil/{{auth()->user()->id}}" method="post" enctype="multipart/form-data" token="{{ csrf_token() }}">
				{{ csrf_field() }}
			<h6 class="br-section-label">Dados da Conta</h6>
			<div class="form-layout form-layout-1">
				<div class="row mg-b-25">
				  <div class="col-lg-4">
					<div class="form-group">
					  <label class="form-control-label">Nome:</label>
					  <input class="form-control" type="text" name="name" value="{{auth()->user()->name}}">
					</div>
				  </div><!-- col-4 -->
				  <div class="col-lg-4">
					<div class="form-group">
					  <label class="form-control-label">Email:</label>
					  <input class="form-control" type="text" name="email" value="{{auth()->user()->email}}">
					</div>
				  </div><!-- col-4 -->
				  <div class="col-lg-4">
					<div class="form-group">
					  <label class="form-control-label">Senha: </label>
					  <input class="form-control" type="password" name="password" placeholder="Senha">
					</div>
				  </div><!-- col-4 -->				  
				</div><!-- row -->
			</div>
			<h6 class="br-section-label">Dados Pessoais</h6>
			<div class="form-layout form-layout-1">
				<div class="row mg-b-25">
				  <div class="col-lg-4">
					<div class="form-group">
					  <label class="form-control-label">BI: </label>
					  <input class="form-control" type="text" placeholder="005902675LA044" name="bilhete">
					</div>
				  </div><!-- col-4 -->
				  <div class="col-lg-2">
					<div class="form-group">
					  <label class="form-control-label">Data de nascimento: </label>
					  <input class="form-control" type="date" name="data_nasc" placeholder="Data">
					</div>
				  </div><!-- col-4 -->
				  <div class="col-lg-3">
					<div class="form-group">
					  <label class="form-control-label">Telefone: </label>
					  <input class="form-control" type="text" name="telefone" placeholder="Telefone" value="{{auth()->user()->telefone}}" required>
					</div>
				  </div><!-- col-4 -->	
				  <div class="col-lg-3">
					<div class="form-group">
					  <label class="form-control-label">Profissão: </label>
					  <input class="form-control" type="text" name="profissao" placeholder="Profissão">
					</div>
				  </div><!-- col-4 -->				  
							  
				</div><!-- row -->
			</div>
			<h6 class="br-section-label">Endereço</h6>
			<div class="form-layout form-layout-1">
				<div class="row mg-b-25">
				  <div class="col-lg-4">
					<div class="form-group">
					  <label class="form-control-label">Bairro: </label>
					  <input class="form-control" type="text"name="bairro" placeholder="Bairro">
					</div>
				  </div><!-- col-4 -->
				  <div class="col-lg-4">
					<div class="form-group">
					  <label class="form-control-label">Município: </label>
					  <input class="form-control" name="municipio" placeholder="Município">
					</div>
				  </div><!-- col-4 -->
				  <div class="col-lg-4">
					<div class="form-group">
					  <label class="form-control-label">Província: </label>
					  <input class="form-control" type="text"  name="provincia" placeholder="Província">
					</div>
				  </div><!-- col-4 -->					  			  
				</div><!-- row -->
			</div>
			<h6 class="br-section-label">Dados Bancários</h6>
			<div class="form-layout form-layout-1">
				<div class="row mg-b-25">
				  <div class="col-lg-4">
					<div class="form-group">
					  <label class="form-control-label">Nº da Conta: </label>
					  <input class="form-control" type="text" placeholder="3102201210001" name="conta_bancaria" value="{{$bank_data[0]->conta_bancaria}}">
					</div>
				  </div><!-- col-4 -->
				  <div class="col-lg-4">
					<div class="form-group">
					  <label class="form-control-label">IBAN: </label>
					  <input class="form-control" type="text" name="iban" value="{{$bank_data[0]->iban}}">
					</div>
				  </div><!-- col-4 -->
				  <div class="col-lg-4">
					<div class="form-group">
					  <label class="form-control-label">Titular: </label>
					  <input class="form-control" type="text"  name="titular" value="{{$bank_data[0]->titular}}">
					</div>
				  </div><!-- col-4 -->					  			  
				</div><!-- row -->
			</div>

			
			<div class="form-layout-footer">
				<br><br>
				<button class="btn btn-outline-info bd-2 d-table m-auto px-5 width-auto" type="submit" >Atualizar perfil</button>
				
			  </div><!-- form-layout-footer -->
			</form>


		</div>
	</div>
	
     
	</div>
	
	

@endsection