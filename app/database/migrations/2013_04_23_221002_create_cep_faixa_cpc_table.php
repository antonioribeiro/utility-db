<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCepFaixaCpcTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cep_faixa_cpc', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('cpc_nu')->nullable();
			$table->string('cpc_inicial', 6)->nullable();
			$table->string('cpc_final', 6)->nullable();
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
        Schema::drop('cep_faixa_cpc');
    }

}
