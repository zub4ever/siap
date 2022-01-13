<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegrasPermissaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regras_permissao', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('regras_id')->unsigned();
            $table->foreign('regras_id')->references('id')->on('regras')->onDelete('cascade');
            //Referenciando a tabela Permissao
             $table->integer('permissao_id')->unsigned();
            $table->foreign('permissao_id')->references('id')->on('permissao')->onDelete('cascade');
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
        Schema::dropIfExists('regras_permissao');
    }
}
