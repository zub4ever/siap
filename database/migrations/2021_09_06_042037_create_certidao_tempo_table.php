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
            $table->unsignedInteger('tpProfessor_id')->nullable();
            $table->foreign('tpProfessor_id')->references('id')->on('tpProfessor')->onDelete('cascade');
            $table->dateTime('data_ingresso')->nullable();
            $table->dateTime('data_termino')->nullable();

            $table->unsignedInteger('tpAposentadoriaEspecial_id')->nullable();
            $table->foreign('tpAposentadoriaEspecial_id')->references('id')->on('tpAposentadoriaEspecial')->onDelete('cascade');
            //
            $table->unsignedInteger('tpServicoMilitar_id')->nullable();
            $table->foreign('tpServicoMilitar_id')->references('id')->on('tpServicoMilitar')->onDelete('cascade');
            //
            $table->unsignedInteger('tpPCCR_id')->nullable();
            $table->foreign('tpPCCR_id')->references('id')->on('tpPCCR')->onDelete('cascade');
            //tpServicoPublico
            $table->unsignedInteger('tpServicoPublico_id')->nullable();
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
