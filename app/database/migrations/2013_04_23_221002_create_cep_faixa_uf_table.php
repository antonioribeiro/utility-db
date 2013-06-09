<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCepFaixaUfTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cep_faixa_uf', function(Blueprint $table) {
            $table->increments('id');
            $table->string('ufe_sg', 2)->nullable();
			$table->string('ufe_cep_ini', 8)->nullable();
			$table->string('ufe_cep_fim', 8)->nullable();
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
        Schema::drop('cep_faixa_uf');
    }

}
