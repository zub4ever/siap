<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServeTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('serve', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('matricula')->unsigned();
            $table->string('nm_servidor', 150)->nullable();

            //$table->char('sexo', 1)->nullable();
            $table->date('data_nascimento')->nullable();
            //
           // $table->integer('sexo_id')->unsigned();
           // $table->foreign('sexo_id')->references('id')->on('sexo')->onDelete('cascade');
            //
            $table->string('rg', 10)->nullable();
           // $table->integer('orgao_expedidor_id')->unsigned();
           // $table->foreign('orgao_expedidor_id')->references('id')->on('orgao_expedidor')->onDelete('cascade');
            $table->string('cpf', 11)->nullable();
            $table->string('pis_pasep', 20)->nullable();
            $table->string('nm_pai', 100)->nullable();
            $table->string('nm_mae', 100)->nullable();
          //  $table->integer('obito_id')->unsigned();
           // $table->foreign('obito_id')->references('id')->on('obito')->onDelete('cascade');
            //            
            //$table->string('telefone', 12)->nullable();
            //$table->string('email', 100)->nullable();
            
            //Referencia tabela origin
            $table->integer('origin_id')->unsigned();
            $table->foreign('origin_id')->references('id')->on('origin')->onDelete('cascade');
          //  $table->integer('type_serve_id')->unsigned();
           // $table->foreign('type_serve_id')->references('id')->on('type_serve')->onDelete('cascade');
            //Estado Civil
           
           // $table->integer('marital_status_id')->unsigned();
           // $table->foreign('marital_status_id')->references('id')->on('marital_status')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('serve');
    }

}