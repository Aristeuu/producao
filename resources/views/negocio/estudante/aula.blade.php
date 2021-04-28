@extends('layouts.admin')

@section('content')

		@include('layouts.menu')



<div class="br-section-aluno bg-color">
	<div class="row row-sm mg-t-20">
		<div class="col-lg-8">
            <div class="card card-inverse bd-0 mg-b-20 ht-400 ht-xs-350 ht-lg-100p">
				
                <img class="wd-100p ht-100p object-fit-cover rounded" src="https://via.placeholder.com/3000x1500" alt="Image">
                <div class="pos-absolute a-0 pd-b-30 bg-black-5 rounded d-flex align-items-sm-center justify-content-center">
                  <div class="tx-center wd-80p mg-t-25 mg-sm-t-0">
                    <p class="tx-info tx-uppercase tx-mont tx-semibold tx-11"></p>
                    <h3 class="tx-center lh-4 tx-light tx-roboto"><a href="" class="tx-white-8 hover-white"></a></h3>
                  </div>
                </div><!-- pos-absolute d-flex -->

                <div class="pos-absolute b-0 x-0 pd-y-15 pd-x-25 bd-t bd-white-1">
                  <div class="d-sm-flex justify-content-between align-items-center tx-13">
                    <span class="d-block tx-white-8 mg-r-5"></span>
                    <a  href="/aulaestudante/" class="d-block texto-white hover-white mg-r-10"><i class="fa fa-heart-o mg-r-5"></i> Anterior</a>
                    <a href="/aulaestudante/" class="d-block texto-white hover-white"><i class="fa fa-comment-o mg-r-5"></i>Próximo</a>
                    <span> <a href="" class="tx-white-8 hover-white"></a></span>
                  </div><!-- d-flex -->
                </div><!-- pos-absolute-bottom -->
              </div><!-- card -->
		  </div>
		  

		  <div class="col-lg-4">
            <div class="card shadow-base bd-0 pd-25 ht-100p">
              <div class="media mg-b-25">
                
                <div class="media-body mg-t-2">
                  <h6 class="mg-b-5 tx-14"><a href="" class="tx-inverse">{{$listAulas[0]->aula_titulo}}</a></h6>
                  <div class="tx-12"></div>
                </div><!-- media-body -->
              </div><!-- media -->
			  <h5 class="tx-normal tx-roboto mg-b-15 lh-4"><a href="" class="tx-inverse hover-info"></h5>
			  
			  
    </div>
</div>	


@endsection

