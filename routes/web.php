<?php
Route::get('/','Portal\HomeController@index');
Auth::routes();
Route::get('/admin', 'Admin\AuthController@dashboard')->name('admin');
Route::get('/admin/login', 'Admin\AuthController@showLoginForm')->name('admin.login');
Route::get('/admin/logout', 'Admin\AuthController@logout')->name('admin.logout');   
Route::post('/admin/login/do', 'Admin\AuthController@login')->name('admin.login.do'); 
Route::get('/admin/login/{var}', 'Admin\AuthController@loginAtivacao')->name('admin.login.ativar');
Route::resource('utilizadores', 'Admin\UtilizadorController');
Route::get('/perfil', 'Admin\UtilizadorController@perfil');
Route::get('/perfilAluno', 'Admin\UtilizadorController@perfilAluno');
Route::resource('formador', 'Admin\FormadorController');
Route::get('/formadores', 'Admin\FormadorController@formadores')->name('formadores.ver');
Route::get('/contacto', 'Admin\ContactoController@contacto');
Route::resource('academia', 'Admin\AcademiaController');
Route::get('/acadmeuscursos', 'Admin\FormadorController@meusCursosAcademia');
Route::get('/pdf', 'Admin\CertificadoController@certificado');
Route::get('/meusalunos', 'Admin\FormadorController@alunosCursos');
Route::get('/aluno/{id}', 'Admin\UtilizadorController@ShowAluno');
    
         
        

Route::get('/termos', 'Admin\TermosController@index');
Route::resource('/novoCurso', 'Admin\novoCursoController');
Route::get('/formaform/{id}', 'Admin\FormadorController@view');


//negocio
Route::get('/alunos/{id}', 'Admin\FormadorController@alunosCurso');
Route::resource('operacoes', 'Admin\OperacoesController');
Route::get('/formanegocio', 'Admin\FormadorController@meusCursos');
Route::get('/formanegocio/{id}', 'Admin\FormadorController@meusModulos');
Route::get('/deletar/{var}', 'Admin\CursoController@destroy');
Route::get('/editar/{id}', 'Admin\CursoController@editar')->name('editar');
Route::post('/update/{id}', 'Admin\CursoController@update');
Route::get('/upload/{var}', 'Admin\FormadorController@upload');
//Route::get('/formaform', 'Admin\FormadorController@registar');
Route::post('/formaBanco', 'Admin\FormadorController@bancodata')->name('formador.bancodata');
Route::get('/modulonegocio/{id}', 'Admin\ModuloController@aulasModulo');
Route::get('/carrinhos', 'Admin\CarrinhoController@index')->name('carrinho.index');
Route::get('/carrinho/remover','Admin\CarrinhoController@remover')->name('carrinho.remover');
Route::post('/carrinho/concluir','Admin\CarrinhoController@concluir')->name('carrinho.concluir');
Route::get('/carrinho/compras', 'Admin\CarrinhoController@compras')->name('carrinho.compras');
Route::post('/carrinho/cancelar', 'Admin\CarrinhoController@cancelar')->name('carrinho.cancelar');
Route::get('/pagamento/{id}', 'Admin\PagamentoController@pagamento')->name('pagamento.index');
Route::resource('estudantenegocio','Admin\AlunoController');
Route::post('/carrinho/adicionar', 'Admin\CarrinhoController@adicionar')->name('carrinho.adicionar');
Route::post('/carrinho/comprar', 'Admin\CarrinhoController@comprar')->name('carrinho.comprar');
Route::get('/carrinho/adicionar', function() {
    return redirect()->route('carrinho.index');
});
Route::post('/coproducao/{id}', 'Admin\CursoController@coproducao');

Route::resource('cursos', 'Admin\CursoController');
Route::any('cursosss/busca', 'Admin\CursoController@busca')->name('cursos.busca');
Route::any('blog/search', 'Admin\BlogController@search')->name('blog.search');
Route::resource('servicos', 'Admin\ServicosController');
Route::resource('cat_blog', 'Admin\CatBlogController');
Route::get('/cursonegocio', 'Admin\CursoController@cursos');
Route::get('/cursocat/{id}', 'Admin\CursoController@cursoCategorias');
Route::resource('modulos', 'Admin\ModuloController');
Route::resource('aula', 'Admin\AulaController');
//Route::resource('cursoestudante','Admin\EstudanteCursoController');
Route::get('/cursoestudante/{id}','Admin\EstudanteCursoController@curso');
Route::get('/aulaestudante/{id}','Admin\EstudanteAulaController@aula');
Route::get('/aulaestudante/{id_curso}/{id_aula}','Admin\EstudanteAulaController@aulaview');
Route::resource('categoria', 'Admin\CategoriaController');
Route::resource('sobre','Admin\SobreController');
Route::get('/sobr/detalhes','Admin\AulaController@detalhes')->name('sobre.detalhes');
Route::get('/detalhes/{id}', 'Admin\CursoController@detalhes')->name('detalhes');
Route::resource('banner', 'Admin\BannerController');
Route::resource('financa', 'Admin\FinancaController');
Route::resource('blog', 'Admin\BlogController');
Route::resource('newslater', 'Admin\NewslaterController');
Route::get('/blogcat/{id}', 'Admin\BlogController@listaBlogcateg');
Route::get('/blogfront', 'Admin\BlogController@blog');
Route::get('/blogfront/{id}', 'Admin\BlogController@blogsingle');
//Route::get('/registar', 'Admin\RegistarController@index');
Route::post('/registar/store', 'Admin\RegistarController@store')->name('admin.registar');
Route::resource('faqs', 'Admin\FaqsController');
Route::get('/perguntas', 'Admin\FaqsController@faqs');
Route::resource('contactos', 'Admin\ContactoController');
Route::resource('publicacao', 'Admin\PublicacaoController');
Route::post('/comentario', 'Admin\ComentarioController@store')->name('comentario.store');
Route::post('/editarperfil/{id}', 'Admin\UtilizadorController@editarPerfil');
Route::post('/editarperfilAluno/{id}', 'Admin\UtilizadorController@editarPerfilAluno');
Route::get('/academias/yeto', 'Admin\AcademiaController@academiasfront');
Route::post('/producao','Admin\CoproducaoController@store')->name('coproducao.store');



//aulas
Route::get('/del/{id}', 'Admin\AulaController@destroy');
Route::post('/updateAula','Admin\AulaController@update');

//pagamento
Route::post('/pagamento/concluir','Admin\PagamentoController@concluir')->name('pagamento.concluir');
Route::resource('pagamentos', 'Admin\PagamentoController');

Route::get('relatoriodecompras', 'Admin\PagamentoController@relatoriodecompras');
Route::get('relatoriodeVendas', 'Admin\PagamentoController@relatoriodeVendas')->name('pagamento.relatoriodeVenda');
Route::post('filter', 'Admin\PagamentoController@filtro')->name('filtro');

//modulos
Route::get('/delete/{id}', 'Admin\ModuloController@destroy');
Route::get('/edit/{var}', 'Admin\ModuloController@editar');
Route::post('/updateMod', 'Admin\ModuloController@update');



//admin 
Route::get('/on/{id}','Admin\CursoController@on');//funcao para ativar o curso para o formador
Route::get('/off/{id}','Admin\CursoController@off');// para desativar o curso para o formador
Route::get('/admin_curso/{id}','Admin\FormadorController@cursoview');//rota para ver o curso para o admin
Route::get('/admin_aulafree/{id}','Admin\AulaController@free');//rota para tornar a aula grátis
Route::get('/admin_aulades/{id}','Admin\AulaController@unfree');//rpta para desativar aula grátis
Route::get('/admin/relatorios',function(){
        
    return view('admin.config.relatorios');
});
Route::get('/admin/relatorios/formadores','Admin\FormadorController@listarFormadores');
Route::get('/admin/relatorios/alunos','Admin\AlunoController@listarAlunos');
Route::get('/admin/relatorios/alunos/{id}','Admin\AlunoController@listaAlunoCurso');



//formador
Route::get('/disp/{id}','Admin\CursoController@disponibilizar');//funcao para ativar o curso para o público  
Route::get('/dispOff/{id}','Admin\CursoController@disponibilizar_OFF');//funcao para desativar o curso para o público
