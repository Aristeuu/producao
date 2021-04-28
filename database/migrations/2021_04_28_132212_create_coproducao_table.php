<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoproducaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coproducao', function (Blueprint $table) {
            $table->bigIncrements('id');            
            $table->Integer('id_curso')->unsigned();    
            $table->Integer('id_formador')->unsigned();           
            $table->Integer('id_cop')->unsigned();
            $table->enum('statusYeto', ['true', 'false']);
            $table->float('percenF')->unsigned();
            $table->float('percenC')->unsigned();
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
        Schema::dropIfExists('coproducao');
    }
}
