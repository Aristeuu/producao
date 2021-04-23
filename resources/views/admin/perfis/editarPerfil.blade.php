@extends('layouts.admin')

@section('content')

		@include('layouts.menu')
		
		
	<div class="br-pagebody formadorperfil">
        <div class="br-section-wrapper">
          <h6 class="br-section-label">Informações de Conta</h6>
          
          <div class="form-layout form-layout-1">
            <div class="row mg-b-25">
				 <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Nome:</label>
                  <input class="form-control" type="text" name="nome" value="{{auth()->user()->name}}">
                </div>
			  </div><!-- col-4 -->
			   <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Email address:</label>
                  <input class="form-control" type="text" name="email" value="{{auth()->user()->email}}">
                </div>
			  </div><!-- col-4 -->
			   <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Senha:</label>
                  <input class="form-control" type="password"   value="senha" name="password" >
                </div>
			  </div><!-- col-4 -->
			
            </div><!-- row -->
			<h6 class="br-section-label">Dados Pessoas</h6>
			
			<div class="form-layout form-layout-1">
				<div class="row ">
 
			   
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">BI:</label>
                  <input class="form-control" type="text" name="bilhete" value="005902675LA044">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Data de Nascimento:</label>
                  <input class="form-control" type="date"  name="datanascimento">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Telefone:</label>
                  <input class="form-control" type="text" name="telefone" value="{{auth()->user()->telefone}}" required>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Profissão:</label>
                  <input class="form-control" type="text" name="profissão" >
                </div>
			  </div><!-- col-8 -->
			</div><!-- row -->
			</div>

				<h6 class="br-section-label">Endereço</h6>
			
			<div class="form-layout form-layout-1">
				<div class="row mg-b-25">
 
			   
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Bairro:</label>
                  <input class="form-control" type="text" name="firstname" value="Bairro">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Província:</label>
                  <input class="form-control" type="text" name="lastname" value="Província">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Município:</label>
                  <input class="form-control" type="text" name="email" value="Município">
                </div>
              </div><!-- col-4 -->
			</div><!-- row -->
			    </div>
				
					<h6 class="br-section-label">Dados Bancários</h6>
			
			<div class="form-layout form-layout-1">
				<div class="row mg-b-25">
 
			   
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Conta Bancár:</label>
                  <input class="form-control" type="text" name="conta bancaria" value="{{$bank_data[0]->conta_bancaria}}">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">IBAN:</label>
                  <input class="form-control" type="text" name="Iban" value="{{$bank_data[0]->iban}}">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Titular:</label>
                  <input class="form-control" type="text" name="titular" value="{{$bank_data[0]->titular}}">
                </div>
              </div><!-- col-4 -->
			</div><!-- row -->

			
           <div class="form-layout-footer container">
              <button class="btn btn-oblong btn-outline-info btn-block mg-b-10" type="submit">Atualizar perfil</button>
            </div>

		 </div>

		
		
         

        </div><!-- br-section-wrapper -->
      </div>
	
	

@endsection