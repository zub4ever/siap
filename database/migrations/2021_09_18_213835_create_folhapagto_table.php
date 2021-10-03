<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFolhapagtoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('folhapagto', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ano')->unsigned();
            $table->integer('mes')->unsigned();
            $table->integer('qtdAposentadoFffin')->unsigned();
            $table->integer('qtdAposentadoFprev')->unsigned();
            $table->integer('qtdPensionistaFfin')->unsigned();
            $table->integer('qtdPensionistaFprev')->unsigned();
            $table->integer('qtdTotalFfin')->unsigned();
            $table->integer('qtdTotalFprev')->unsigned();
            $table->double('valorAposFfin')->unsigned();
            $table->double('valorAposFprev')->unsigned();
            $table->double('valorPenFfin')->unsigned();
            $table->double('valorPenFprev')->unsigned();
            $table->double('valorTotalFfin')->unsigned();
            $table->double('valorTotalFprev')->unsigned();
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
        Schema::dropIfExists('folhapagto');
    }
}
