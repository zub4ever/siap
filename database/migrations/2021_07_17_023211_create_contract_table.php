<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('contract', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nr_contrato')->unsigned();
            //
            $table->integer('origin_id')->unsigned();
            $table->foreign('origin_id')->references('id')->on('origin')->onDelete('cascade');
            //
            $table->integer('orgao_id')->unsigned();
            $table->foreign('orgao_id')->references('id')->on('orgao')->onDelete('cascade');
            //
            $table->integer('funcao_id')->unsigned();
            $table->foreign('funcao_id')->references('id')->on('funcao')->onDelete('cascade');
            //
            $table->integer('serve_id')->unsigned();
            $table->foreign('serve_id')->references('id')->on('serve')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('contract');
    }

}
