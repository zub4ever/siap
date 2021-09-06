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
            $table->integer('serve_id')->unsigned();
            $table->foreign('serve_id')->references('id')->on('serve')->onDelete('cascade');
            //
            $table->integer('contrato')->unsigned();
            $table->date('ing_serv_publico')->unsigned();
            $table->date('ing_cargo')->unsigned();
            $table->integer('licenca_gozada')->nullable();
            ;
            $table->date('data_pedido')->unsigned();
            //Tipo de Aposentadoria
            $table->integer('aposentadoria_id')->unsigned();
            $table->foreign('aposentadoria_id')->references('id')->on('aposentadoria')->onDelete('cascade');
            //
            $table->integer('cod_cid')->nullable();
            $table->string('nm_cid')->nullable();
            $table->integer('cid')->nullable();
            $table->string('ato_concessao')->nullable();
            $table->date('ato_data')->nullable();
            $table->string('publicacao')->nullable();
            $table->date('data_publicacao')->nullable();
            $table->string('processo_org')->nullable();
            $table->date('processo_org_data')->nullable();
            $table->string('processo_adm')->nullable();
            $table->date('processo_adm_data')->nullable();
            $table->string('processo_tce')->nullable();
            $table->date('processo_tce_data')->nullable();
            $table->date('invalidez_data')->nullable();
            $table->string('grupo')->nullable();
            $table->string('protocolo')->nullable();
            $table->integer('faltas')->nullable();
            //Certidao Tempo
            $table->integer('certidao_tempo_id')->unsigned();
            $table->foreign('certidao_tempo_id')->references('id')->on('certidao_tempo')->onDelete('cascade');
            //
            $table->integer('pedido_status')->unsigned();
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
