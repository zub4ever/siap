<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidoTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('pedido', function (Blueprint $table) {
            $table->increments('id');
            //
            $table->unsignedInteger('serve_id')->nullable();
            $table->foreign('serve_id')->references('id')->on('serve')->onDelete('cascade');
            //
            $table->integer('contrato')->unsigned();
            $table->dateTime('ing_serv_publico')->nullable();
            $table->dateTime('ing_cargo')->nullable();
            $table->integer('licenca_gozada')->nullable();
           
            $table->dateTime('data_pedido')->nullable();
            //Tipo de Aposentadoria
            $table->unsignedInteger('aposentadoria_id')->nullable();
            $table->foreign('aposentadoria_id')->references('id')->on('aposentadoria')->onDelete('cascade');
            //
            $table->integer('cod_cid')->nullable();
            $table->string('nm_cid')->nullable();
            $table->integer('cid')->nullable();
            $table->string('ato_concessao')->nullable();
            $table->dateTime('ato_data')->nullable();
            $table->string('publicacao')->nullable();
            $table->dateTime('data_publicacao')->nullable();
            $table->string('processo_org')->nullable();
            $table->dateTime('processo_org_data')->nullable();
            $table->string('processo_adm')->nullable();
            $table->dateTime('processo_adm_data')->nullable();
            $table->string('processo_tce')->nullable();
            $table->dateTime('processo_tce_data')->nullable();
            $table->dateTime('invalidez_data')->nullable();
            $table->string('grupo')->nullable();
            $table->string('protocolo')->nullable();
            $table->integer('faltas')->nullable();
            //Certidao Tempo
            $table->unsignedInteger('certidao_tempo_id')->nullable();
            $table->foreign('certidao_tempo_id')->references('id')->on('certidao_tempo')->onDelete('cascade');
            //
            $table->integer('pedido_status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('pedido');
    }

}
