<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertidaoTempoTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('certidao_tempo', function (Blueprint $table) {
            $table->increments('id');
            //
            //
            $table->string('nm_empregador')->nullable();
            $table->string('cpf_cnpj')->nullable();
            $table->string('nm_cid')->nullable();
            $table->integer('tpProfessor_id')->unsigned();
            $table->foreign('tpProfessor_id')->references('id')->on('tpProfessor')->onDelete('cascade');
            $table->date('data_ingresso')->unsigned();
            $table->date('data_termino')->unsigned();

            $table->integer('tpAposentadoriaEspecial_id')->unsigned();
            $table->foreign('tpAposentadoriaEspecial_id')->references('id')->on('tpAposentadoriaEspecial')->onDelete('cascade');
            //
            $table->integer('tpServicoMilitar_id')->unsigned();
            $table->foreign('tpServicoMilitar_id')->references('id')->on('tpServicoMilitar')->onDelete('cascade');
            //
            $table->integer('tpPCCR_id')->unsigned();
            $table->foreign('tpPCCR_id')->references('id')->on('tpPCCR')->onDelete('cascade');
            //tpServicoPublico
            $table->integer('tpServicoPublico_id')->unsigned();
            $table->foreign('tpServicoPublico_id')->references('id')->on('tpServicoPublico')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('certidao_tempo');
    }

}
