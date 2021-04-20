<style>

.card-body {
    flex: 1 1 auto;
    padding: 1.25rem;
    
}

.tx-white {
    color: #fff;
}

.bd-0 {
    border-width: 0;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, 0.125);
    border-radius: 3px;
}

.card-body {
    flex: 1 1 auto;
    padding: 1.25rem;
}

.mg-t-20 {
    margin-top: 20px;
}    
</style>
@extends('layouts.admin')

    @section('content')

        @can('eAdmin')
            <div class="site">
                @include('layouts.menu')
                
                <div class="base-geral">
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <div class="row"> 
                        <div class="col-md-6 mg-t-20 mg-md-t-0">
                            <div class="card card-body bg-light tx-white bd-0">
                                <p class="card-text">
                                    <a href="/admin/relatorios/formadores">Formadores</a></p>
                            </div><!-- card -->
                        </div>
                        
                        
                        <div class="col-md-6 mg-t-20 mg-md-t-0">
                            <div class="card card-body bg-dark tx-white bd-0">
                                <p class="card-text">
                                    <a href="/admin/relatorios/alunos">Alunos</a>
                                </p>
                            </div><!-- card -->
                        </div>
                    </div> 
                </div>



            </div>

        @endcan
    @endsection
