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
          <form action="/editarperfil/{{auth()->user()->id}}" method="post" enctype="multipart/form-data" token="{{ csrf_token() }}">
            {{ csrf_field() }}

          <h6 class="br-section-label">Informações de Conta</h6>          
          
          <div class="form-layout form-layout-1">
            <div class="card-profile-img" style="text-align: center">
              @if(auth()->user()->foto==null)
              <div>
                <img src="https://via.placeholder.com/500" class="rounded-circle" alt="" style="width:100px">                 
              </div>	
              @else
              <img src="http://localhost/yetoafrica/storage/app/public/{{auth()->user()->foto}}" style="width:100px" class="rounded-circle" alt="" id="imgPhoto">				
              @endif
              <div>
                <br>
                <input type="file" name="foto" id="foto" class="inputfile" accept="image/*">
                <label for="foto" class="tx-white bg-info">
                  <i class="icon ion-ios-upload-outline tx-24" style="color:white"></i>
                  <span style="color:white">Carregar foto...</span>
                </label>
              </div>
              </div><!-- card-profile-img -->      
                       
               <div class="row mg-b-25">                              

              
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Nome:</label>
                  <input class="form-control" type="text" name="name" value="{{auth()->user()->name}}">
                </div>
			  </div><!-- col-4 -->
			   <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Email:</label>
                  <input class="form-control" type="text" name="email" value="{{auth()->user()->email}}">
                </div>
			  </div><!-- col-4 -->
			   <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Senha:</label>
                  <input class="form-control" type="password" name="password" >
                </div>
			  </div><!-- col-4 -->
			
            </div><!-- row -->
			<h6 class="br-section-label">Dados Pessoas</h6>
			
			<div class="form-layout form-layout-1">
				<div class="row ">
 
			   
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">BI:</label>
                  <input class="form-control" type="text" name="bilhete" placeholder="005902675LA044">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Data de Nascimento:</label>
                  <input class="form-control" type="date"  name="data_nasc">
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
                  <input class="form-control" type="text" name="profissao" >
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
                  <input class="form-control" type="text" name="provincia" placeholder="Provincia">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Municipio:</label>
                  <input class="form-control" type="text" name="municipio" placeholder="Municipio">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Bairro:</label>
                  <input class="form-control" type="text" name="bairro" placeholder="Bairro">
                </div>
              </div><!-- col-4 -->
			</div><!-- row -->
			    </div>
				
					<h6 class="br-section-label">Dados Bancários</h6>
			
			<div class="form-layout form-layout-1">
				<div class="row mg-b-25">
 
			   
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Conta Bancários:</label>
                  <input class="form-control" type="text" name="conta_bancaria" value="{{$bank_data[0]->conta_bancaria}}">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">IBAN:</label>
                  <input class="form-control" type="text" name="iban" value="{{$bank_data[0]->iban}}">
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

		
		</form>
         

        </div><!-- br-section-wrapper -->
      </div>

      
	
      <script type="text/javascript">

        'use strict'
        let photo = document.getElementById('imgPhoto');
        let file  = document.getElementById('foto');
        
        function modifyText()
        {
          alert("new_text");
        }
         
        
        photo.addEventListener("click", function(){modifyText()}, false);
        
       /* file.addEventListener('change', (event) => {
           
          let reader = new FileReader();
        
          reader.onload = () => {
          photo.src = reader.result;
          }
        
          reader.readAsDataURL(file.files[0]);
        });*/
        
        </script>	

@endsection

