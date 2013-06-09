<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCepLogradouroTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cep_logradouro', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('log_nu')->nullable()->index();
			$table->string('ufe_sg', 2)->nullable()->index()->index();
			$table->integer('loc_nu')->nullable();
			$table->integer('bai_nu_ini')->nullable();
			$table->integer('bai_nu_fim')->nullable();
			$table->string('log_no')->nullable()->index();
			$table->string('log_complemento')->nullable();
			$table->string('cep', 8)->nullable()->index();
			$table->string('tlo_tx')->nullable()->index();
			$table->string('log_sta_tlo', 1)->nullable()->index();
			$table->string('log_no_abrev', 64)->nullable();
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
        Schema::drop('cep_logradouro');
    }

}
