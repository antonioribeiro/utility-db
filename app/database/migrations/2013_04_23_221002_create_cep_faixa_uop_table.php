<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCepFaixaUopTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cep_faixa_uop', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('uop_nu')->nullable();
			$table->integer('fnc_inicial')->nullable();
			$table->integer('fnc_final')->nullable();
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
        Schema::drop('cep_faixa_uop');
    }

}
