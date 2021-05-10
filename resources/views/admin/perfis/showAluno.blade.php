@extends('layouts.admin')

@section('content')

		@include('layouts.menu')
		<style>
      input[type='file']
      {
        display: none;
      }
    </style>
		
	<div class="br-pagebody formadorperfil">
        <div class="br-section-wrapper">
          
          <h6 class="br-section-label">Perfil do Aluno</h6>          
          
          <div class="form-layout form-layout-1">
            <div class="card-profile-img" style="text-align: center">
              @if($aluno[0]->foto==null)
              <div>
                <img src="https://via.placeholder.com/500" class="rounded-circle" alt="" style="width:100px">                 
              </div>	
              @else
              <img src="http://localhost/yetoafrica/storage/app/public/{{$aluno[0]->foto}}" style="width:100px" class="rounded-circle" alt="" id="imgPhoto">				
              @endif
             
              </div><!-- card-profile-img -->      
                       
               <div class="row mg-b-25">                              

              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Nome:</label>
                  <input class="form-control" type="text" name="name" value="{{$aluno[0]->name}}" readonly>
                </div>
			       </div><!-- col-4 -->             
			   <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Email:</label>
                  <input class="form-control" type="text" name="email" value="{{$aluno[0]->email}}" readonly>
                </div>
			  </div><!-- col-4 -->
               <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Telefone:</label>
                  <input class="form-control" type="text" name="telefone" value="{{$aluno[0]->telefone}}" readonly>
                </div>
              </div><!-- col-4 -->			  
			
            </div><!-- row -->
			<h6 class="br-section-label">Dados Pessoas</h6>
			
			<div class="form-layout form-layout-1">
				<div class="row ">
 
			   
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">BI:</label>
                  <input class="form-control" type="text" name="bilhete" readonly>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Data de Nascimento:</label>
                  <input class="form-control" type="date"  name="data_nasc" readonly>
                </div>
              </div><!-- col-4 -->             
              <div class="col-lg-3">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Profissão:</label>
                  <input class="form-control" type="text" name="profissao" readonly >
                </div>
			  </div><!-- col-8 -->
			</div><!-- row -->
			</div>

				<h6 class="br-section-label">Endereço</h6>
			
			<div class="form-layout form-layout-1">
				<div class="row mg-b-25">
 
			   
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Província:</label>
                  <input class="form-control" type="text" name="provincia" readonly>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Municipio:</label>
                  <input class="form-control" type="text" name="municipio" readonly>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Bairro:</label>
                  <input class="form-control" type="text" name="bairro" readonly>
                </div>
              </div><!-- col-4 -->
			</div><!-- row -->
			    </div>
				
				
			
		
	
         

        </div><!-- br-section-wrapper -->
      </div>      
	
     	

@endsection

