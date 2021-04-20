<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operacoes', function (Blueprint $table) {
           
            $table->increments('id');
            $table->Integer('id_formador')->unsigned();
            $table->foreign('id_formador')->references('id')->on('formador')->onDelete('cascade');
            $table->float('valor_retirado')->unsigned();            
            $table->float('valor_entrada')->unsigned();  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operacoes');
    }
}
