
@can('est')
 <div class=" br-profile-page">
     

      <div class="card shadow-base bd-0 rounded-0 widget-4">
          <div class="estudent">
        <div class="card-header">
            
          <div class="hidden-xs-down">
                 <nav class="nav">
		<div class="dropdown">
		  <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
			<i class="icon ion-ios-bell-outline tx-24"></i>
			<!-- start: if statement -->
			<span class="square-8 bg-danger pos-absolute t-15 r-5 rounded-circle"></span>
			<!-- end: if statement -->
		  </a>
		  <div class="dropdown-menu dropdown-menu-header">
			<div class="dropdown-menu-label">
			  <label>Notificações</label>
			  <a href="">Marcar todas como lidas</a>
			</div><!-- d-flex -->

			<div class="media-list">
			  <!-- loop starts here -->
			  <a href="" class="media-list-link read">
				<div class="media">
				  <img src="https://via.placeholder.com/500" alt="">
				  <div class="media-body">
					<p class="noti-text"><strong></strong> </p>
					<span></span>
				  </div>
				</div><!-- media -->
			  </a>
			  <!-- loop ends here -->
			  <a href="" class="media-list-link read">
				<div class="media">
				  <img src="http://producao.yetoafrica.com/storage/app/public/{{auth()->user()->foto}}" alt="">
				  <div class="media-body">
					<p class="noti-text"><strong></strong>  <strong>T</strong></p>
					<span></span>
				  </div>
				</div><!-- media -->
			  </a>
			  <a href="" class="media-list-link read">
				<div class="media">
				  <img src="http://producao.yetoafrica.com/storage/app/public/{{auth()->user()->foto}}" alt="">
				  <div class="media-body">
					<p class="noti-text">
				  </div>
				</div><!-- media -->
			  </a>
			  <a href="" class="media-list-link read">
				<div class="media">
				  <img src="https://via.placeholder.com/500" alt="">
				  <div class="media-body">
					<p class="noti-text">
				  </div>
				</div><!-- media -->
			  </a>
			  <div class="dropdown-footer">
				<a href=""><i class="fas fa-angle-down"></i>Mostrar todas as notificações</a>
			  </div>
			</div><!-- media-list -->
		  </div><!-- dropdown-menu -->
		</div><!-- dropdown -->
		
		
	  </nav>
           
          </div>
          
          </div>
        </div><!-- card-header -->
        <div class="card-body">
          <div class="card-profile-img">
            @if(auth()->user()->foto==null)
			<img src="https://via.placeholder.com/500" class="wd-32 rounded-circle" alt="">
			@else
			<img src="http://localhost/yetoafrica/storage/app/public/{{auth()->user()->foto}}" class="wd-32 rounded-circle" alt="">
			@endif
          </div><!-- card-profile-img -->
          <h4 class="tx-normal tx-roboto texto-white">{{auth()->user()->name}}</h4>
      
        </div><!-- card-body -->
      </div><!-- card -->

     
</div>
@endcan

@can('form')

 <div class=" br-profile-page">
     

      <div class="card shadow-base bd-0 rounded-0 widget-4">
          <div class="estudent">
        <div class="card-header">
            
          <div class="hidden-xs-down">
                 <nav class="nav">
		<div class="dropdown">
		  <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
			<i class="icon ion-ios-bell-outline tx-24"></i>
			<!-- start: if statement -->
			<span class="square-8 bg-danger pos-absolute t-15 r-5 rounded-circle"></span>
			<!-- end: if statement -->
		  </a>
		  <div class="dropdown-menu dropdown-menu-header">
			<div class="dropdown-menu-label">
			  <label>Notificações</label>
			  <a href="">Marcar todas como lidas</a>
			</div><!-- d-flex -->

			<div class="media-list">
			  <!-- loop starts here -->
			  <a href="" class="media-list-link read">
				<div class="media">
				  <img src="https://via.placeholder.com/500" alt="">
				  <div class="media-body">
					<p class="noti-text"><strong></strong> </p>
					<span></span>
				  </div>
				</div><!-- media -->
			  </a>
			  <!-- loop ends here -->
			  <a href="" class="media-list-link read">
				<div class="media">
				  <img src="http://producao.yetoafrica.com/storage/app/public/{{auth()->user()->foto}}" alt="">
				  <div class="media-body">
					<p class="noti-text"><strong></strong>  <strong>T</strong></p>
					<span></span>
				  </div>
				</div><!-- media -->
			  </a>
			  <a href="" class="media-list-link read">
				<div class="media">
				  <img src="http://producao.yetoafrica.com/storage/app/public/{{auth()->user()->foto}}" alt="">
				 
				  <div class="media-body">
					<p class="noti-text">
				  </div>
				</div><!-- media -->
			  </a>
			  <a href="" class="media-list-link read">
				<div class="media">
				  <img src="https://via.placeholder.com/500" alt="">
				  <div class="media-body">
					<p class="noti-text">
				  </div>
				</div><!-- media -->
			  </a>
			  <div class="dropdown-footer">
				<a href=""><i class="fas fa-angle-down"></i>Mostrar todas as notificações</a>
			  </div>
			</div><!-- media-list -->
		  </div><!-- dropdown-menu -->
		</div><!-- dropdown -->
		
		
	  </nav>
           
          </div>
          
          </div>
        </div><!-- card-header -->
        <div class="card-body">
          <div class="card-profile-img">
			@if(auth()->user()->foto==null)
			<div>
				<img src="https://via.placeholder.com/500" class="wd-32 rounded-circle" alt="">		
				
			</div>	
			@else
			<img src="http://localhost/yetoafrica/storage/app/public/{{auth()->user()->foto}}" class="wd-32 rounded-circle" alt="">				
			@endif		
		  </div><!-- card-profile-img -->		
          <h4 class="tx-normal tx-roboto texto-white">{{auth()->user()->name}}</h4>
      
        </div><!-- card-body -->
      </div><!-- card -->

     
</div>
@endcan

@can('acad')
<div class="base-topo">
		<div class="conteudo">
			<a href="" class="menu-m">menu mobile esquerdo</a><!-- aqui fica icone reponsavel pelo menu da esquerda-->
			<a href="" class="menu-grade">menu mobile direito</a><!--aqui fica o menu responsavel pelo menu do topo-->
			<a href="/admin" class="logo"></a>
			<div id="grade">
			<ul class="menu-topo">
			<!--	<li class="sub"><a href=""><i class="ico cursos"></i>Cursos</a>
					<ul>
						<li><a href="">Java</a></li>
						<li><a href="">PHP</a></li>
						<li><a href="">Lógica de programação</a></li>
						<li><a href="">Androind</a></li>
						<li><a href="">Delphi</a></li>
					</ul>
				</li> -->
				<li class="sub user"><a href="" class="thumb"><img src="http://yetoafrica.com/storage/app/public/{{auth()->user()->foto}}"></a>
					<ul>
						<li><b>{{auth()->user()->name}}</b><small><a href="{{route('admin.logout')}}">Sair</a></small></li>
					</ul>
				</li>
			</ul>
		</div>
		</div>
    </div>
@endcan


@can('eAdmin')
 <!-- ########## START: HEAD PANEL ########## -->
 <div class="br-header">
	<div class="br-header-left">
	  <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
	  <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
	  <div class="input-group hidden-xs-down wd-170 transition">
		<input id="searchbox" type="text" class="form-control" placeholder="Search">
		<span class="input-group-btn">
		  <button class="btn btn-secondary" type="button"><i class="fas fa-search"></i></button>
		</span>
	  </div><!-- input-group -->
	</div><!-- br-header-left -->
   <!-- dropdown -->
   <nav class="nav">
		<div class="dropdown">
		  <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
			<i class="icon ion-ios-bell-outline tx-24"></i>
			<!-- start: if statement -->
			<span class="square-8 bg-danger pos-absolute t-15 r-5 rounded-circle"></span>
			<!-- end: if statement -->
		  </a>
		  <div class="dropdown-menu dropdown-menu-header">
			<div class="dropdown-menu-label">
			  <label>Notificações</label>
			  <a href="">Marcar todas como lidas</a>
			</div><!-- d-flex -->

			<div class="media-list">
			  <!-- loop starts here -->
			  <a href="" class="media-list-link read">
				<div class="media">
				  <img src="https://via.placeholder.com/500" alt="">
				  <div class="media-body">
					<p class="noti-text"><strong></strong> </p>
					<span></span>
				  </div>
				</div><!-- media -->
			  </a>
			  <!-- loop ends here -->
			  <a href="" class="media-list-link read">
				<div class="media">
				  <img src="http://producao.yetoafrica.com/storage/app/public/{{auth()->user()->foto}}" alt="">
				  <div class="media-body">
					<p class="noti-text"><strong></strong>  <strong>T</strong></p>
					<span></span>
				  </div>
				</div><!-- media -->
			  </a>
			  <a href="" class="media-list-link read">
				<div class="media">
				  <img src="http://producao.yetoafrica.com/storage/app/public/{{auth()->user()->foto}}" alt="">
				  <div class="media-body">
					<p class="noti-text">
				  </div>
				</div><!-- media -->
			  </a>
			  <a href="" class="media-list-link read">
				<div class="media">
				  <img src="https://via.placeholder.com/500" alt="">
				  <div class="media-body">
					<p class="noti-text">
				  </div>
				</div><!-- media -->
			  </a>
			  <div class="dropdown-footer">
				<a href=""><i class="fas fa-angle-down"></i>Mostrar todas as notificações</a>
			  </div>
			</div><!-- media-list -->
		  </div><!-- dropdown-menu -->
		</div><!-- dropdown -->
		
		<div class="dropdown">
		  <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
			<span class="logged-name hidden-md-down"></span>
			@if(auth()->user()->foto==null)
			<img src="https://via.placeholder.com/500" class="wd-32 rounded-circle" alt="">
			@else
			<img src="http://producao.yetoafrica.com/storage/app/public/{{auth()->user()->foto}}" class="wd-32 rounded-circle" alt="">
			@endif
			<span class="square-10 bg-success"></span>
		  </a>
		  <div class="dropdown-menu dropdown-menu-header wd-250">
			<div class="tx-center">
			  <a href=""><img src="http://producao.yetoafrica.com/storage/app/public/{{auth()->user()->foto}}" class="wd-80 rounded-circle" alt=""></a>
			  <h6 class="logged-fullname">{{auth()->user()->name}}</h6>
			  <p></p>
			</div>
			<hr>
			<div class="tx-center">
			  <span class="profile-earning-label">Ganhos por dia</span>
			  <h3 class="profile-earning-amount">$13,230 <i class="icon ion-ios-arrow-thin-up tx-success"></i></h3>
			  <span class="profile-earning-text">Based on list price.</span>
			</div>
			<hr>
			<ul class="list-unstyled user-profile-nav">
			  <li><a href=""><i class="icon ion-ios-person"></i> Editar Perfil</a></li>
			  
			  <li><a href=""><i class="icon ion-power"></i> Sair</a></li>
			</ul>
		  </div><!-- dropdown-menu -->
		</div><!-- dropdown -->
	  </nav>
	  <!-- navicon-right -->
	</div><!-- br-header-right -->
  </div>
@endcan
<script type="text/javascript">

	function alterar()
	{
		alert("alterar");
	}
</script>