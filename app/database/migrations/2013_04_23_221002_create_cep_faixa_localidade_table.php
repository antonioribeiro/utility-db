<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCepFaixaLocalidadeTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cep_faixa_localidade', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('loc_nu')->nullable();
			$table->string('loc_cep_ini', 8)->nullable();
			$table->string('loc_cep_fim', 8)->nullable();
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
        Schema::drop('cep_faixa_localidade');
    }

}
