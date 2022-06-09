<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBolDapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bol_dap', function (Blueprint $table) {
            $table->id();
            $table->json('boleto');

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
        Schema::create('bol_dap', function (Blueprint $table) {
            $table->id();
            $table->dropColumn('boleto');

            $table->timestamps();
        });
    }
}
