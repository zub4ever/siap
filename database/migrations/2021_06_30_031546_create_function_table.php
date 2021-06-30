<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFunctionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('function', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nm_funcao', 45)->nullable();
            //Referenciação
            $table->integer('orgao_id')->unsigned();
            $table->foreign('orgao_id')->references('id')->on('orgao')->onDelete('cascade');
            //
            
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
        Schema::dropIfExists('function');
    }
}
