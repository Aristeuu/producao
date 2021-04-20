@extends('layouts.admin')
    
        @section('content')
        
            @can('eAdmin')
                <div class="site">
                    @include('layouts.menu')
                    
                    <br><br><br><br><br>
                    <div class="base-geral">
                        


                        <table class="table">	
                            <tr>	
                            
                            
                        
                            <th>#</th>
                            <th>Foto</th>
                            <th>Nome</th>
                            <th>Email</th>
                            
                            
                            
                        
                            
                            
                            </tr>

                        @foreach ($formadores as $formador)

                           <tr>
                                <td>{{$formador->id}}</td>   
                                <td>{{$formador->name}}</td>                                
                                <td>{{$formador->email}}</td>
                                <td><img src="{{$formador->foto}}"></td>
                            </tr>
                        @endforeach
                        
                        

                    </table>
                    {!! $formadores->links() !!}
                    </div>
    
    
    
                </div>
    
            @endcan
        @endsection
    