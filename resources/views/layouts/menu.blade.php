<!DOCTYPE html>
<html lang="pt">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracketplus">
    <meta property="og:title" content="Bracket Plus">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    
    
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">


    <!-- vendor css -->
  <link href="{{asset('backend/estilos/css')}}/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <link href="{{asset('backend/estilos/css')}}/lib/rickshaw/rickshaw.min.css" rel="stylesheet">
    <link href="{{asset('backend/estilos/css')}}/lib/select2/css/select2.min.css" rel="stylesheet">

    

  </head>


 @can('est')
 

      <div class="ht-70 bg-gray-100 pd-x-20 d-flex align-items-center justify-content-center shadow-base">
        <ul class="nav nav-outline active-info align-items-center flex-row" role="tablist">
          <!--li class="nav-item"><a class="nav-link active"  href="admin" role="tab">Dashboard</a></li-->
          <li class="nav-item"><a class="nav-link"  href="/carrinho/compras" role="tab">Meus cursos</a></li>
          <li class="nav-item"><a class="nav-link"  href="/perfilAluno" role="tab">Meu perfil</a></li>
          <li class="nav-item hidden-xs-down"><a class="nav-link"  href="/publicacao" role="tab">Comunidade</a></li>
          <li class="nav-item hidden-xs-down"><a class="nav-link" href="/relatoriodecompras" role="tab">Relatório de compras</a></li>
          <li class="nav-item hidden-xs-down"><a class="nav-link"  href="/" role="tab">Ver site</a></li>
         <li class="nav-item hidden-xs-down"><a class="nav-link"  href="{{route('admin.logout')}}"  role="tab">Sair</a></li>
        </ul>
      </div>
        
        
@endcan

 @can('form')
 
 <div class="ht-70 bg-gray-100 pd-x-20 d-flex align-items-center justify-content-center shadow-base">
        <ul class="nav nav-outline active-info align-items-center flex-row" role="tablist">
        <li class="nav-item"><a class="nav-link"  href="/admin" role="tab">Dashboard</a></li>
          <li class="nav-item"><a class="nav-link"  href="/formanegocio" role="tab">Meus cursos</a></li>
          <!--li class="nav-item"><a class="nav-link"  href="/coproducao" role="tab">Coproducao</a></li-->
          <li class="nav-item"><a class="nav-link"  href="/perfil" role="tab">Meu perfil</a></li>
          <li class="nav-item hidden-xs-down"><a class="nav-link"  href="/publicacao" role="tab">Comunidade</a></li>
          <li class="nav-item hidden-xs-down"><a class="nav-link"  href="/relatoriodeVendas" role="tab">Relatório de Vendas</a></li>
          <li class="nav-item hidden-xs-down"><a class="nav-link"  href="/" role="tab">Ver site</a></li>  
         <li class="nav-item hidden-xs-down"><a class="nav-link"  href="{{route('admin.logout')}}" role="tab">Sair</a></li>
                        
        </ul>
 </div>
 
 
 @endcan

 @can('acad')

<div id="menu">
			<div class="menu-lateral">
		
			<ul>
					<li><a href="/admin"><i class="ico home"></i>HOME</a></li>
					<li><a href="/academia/"><i class="ico perfil"></i>FORMADORES</a></li>
					<li><a href="/formanegocio"><i class="fa fa-play"></i>MEUS CURSOS</a></li>
					<li><a href="/meusalunos"><i class="ico perfil"></i>MEUS ALUNOS</a></li>
					<li><a href="/perfil"><i class="ico perfil"></i>MEU PERFIL</a></li>
					<li><a href="/publicacao"><i class="ico duvida"></i>COMUNIDADE</a></li>
					<li> <a href="#"><i class="ico duvida"></i>RELATÓRIOS</a> </li>
					<li><a href="/termos"><i class="ico duvida"></i>TERMOS DE USO</a></li>
					<li> <a href="/"><i class="ico olho"></i>VER SITE</a> </li>
					<li><a href="{{route('admin.logout')}}"><i class="ico sair"></i>SAIR</a></li>
			</ul>
		</div>
</div>     
@endcan

@can('eAdmin' )

<div class="br-logo"><a href=""><span>[</span>yeto<i>áfrica</i><span>]</span></a></div>
    <div class="br-sideleft sideleft-scrollbar">
      <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navegação</label>
      <ul class="br-sideleft-menu">
        <li class="br-menu-item">
          <a href="admin" class="br-menu-link active">
            <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
            <span class="menu-item-label">Dashboard</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="" class="br-menu-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="menu-item-icon icon ion-ios-play-outline tx-20"></i>
            <span class="menu-item-label">Site</span>
          </a><!-- br-menu-link -->
          <div class="dropdown-menu" style="background-color: orange">
                <a href="/banner">BANNER</a>
                <a href="/blog">BLOG</a>
                <a href="/pagamento">PAGAMENTOS</a>
                <a href="/cat_blog">CATEGORIAS BLOG</a>
                <a href="/sobre">SOBRE</a>
                <a href="/faqs">FAQS</a>
                <a href="/contactos">CONTACTOS</a>
                <a href="/servicos">SERVIÇOS</a>
                <a href="/termos">TERMOS DE USO</a>
                <a href="/newslater">NEWSLATER</a>
           </div>

       </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="/cursos" class="br-menu-link">
            <i  class="menu-item-icon ion-ios-people-outline tx-20" aria-hidden="true"></i>
            <span class="menu-item-label">Cursos</span>
          </a><!-- br-menu-link -->
        </li>
        <li class="br-menu-item">
          <a href="/utilizadores" class="br-menu-link">
            <i class="menu-item-icon icon ion-ios-personadd-outline tx-20"></i>
            <span class="menu-item-label">Utilizadores</span>
          </a><!-- br-menu-link -->
        </li>
        <li class="br-menu-item">
          <a href="/categoria" class="br-menu-link">
            <i  class="fad fa-list-ul"></i>
            <span class="menu-item-label">Categorias</span>
          </a><!-- br-menu-link -->
        </li>
        <li class="br-menu-item">
          <a href="/perfil" class="br-menu-link">
            <i  class=" menu-item-icon icon ion-clipboard  tx-20" aria-hidden="true"></i>
            <span class="menu-item-label">Meu Perfil</span>
          </a><!-- br-menu-link -->
           </li>
           <!---->
           <li class="br-menu-item">
          <a href="/publicacao" class="br-menu-link">
            <i  class=" menu-item-icon icon ion-ios-chatbubble-outline tx-20" aria-hidden="true"></i>
            <span class="menu-item-label">Publicação</span>
          </a><!-- br-menu-link -->
           </li>
           <!---->
           <li class="br-menu-item">
          <a href="/admin/relatorios" class="br-menu-link">
            <i  class="fad fa-analytics" aria-hidden="true"></i>
            
            <span class="menu-item-label">Relatórios</span>
          </a><!-- br-menu-link -->
           </li>
           
             <li class="br-menu-item">
          <a href="/" class="br-menu-link">
            <i  class=" menu-item-icon icon ion- ion-eye  tx-20" aria-hidden="true"></i>
            <span class="menu-item-label">Ver site</span>
          </a><!-- br-menu-link -->
           </li>
           
    <li class="br-menu-item">
          <a href="{{route('admin.logout')}}" class="br-menu-link">
            <i  class=" menu-item-icon icon ion- ion-share  tx-20" aria-hidden="true"></i>
            <span class="menu-item-label">Sair</span>
          </a><!-- br-menu-link -->
           </li>
          
          
       
    
</div>
</div>
        
    

		
 
@endcan










