<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('address', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nm_rua', 150)->nullable();
            $table->string('nr_casa', 15)->nullable();
            $table->string('complemento', 150)->nullable();
            //
            $table->integer('state_id')->unsigned();
            $table->foreign('state_id')->references('id')->on('state')->onDelete('cascade');
            //
            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('city')->onDelete('cascade');
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
        Schema::dropIfExists('address');
    }

}
