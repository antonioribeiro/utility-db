<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCepLocalidadeTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cep_localidade', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('loc_nu')->nullable()->index();
			$table->string('ufe_sg', 2)->nullable()->index();
			$table->string('loc_no')->nullable()->index();
			$table->string('cep', 8)->nullable()->index();
			$table->string('loc_in_sit', 1)->nullable();
			$table->string('loc_in_tipo_loc', 1)->nullable();
			$table->integer('loc_nu_sub')->nullable();
			$table->string('loc_no_abrev', 64)->nullable();
			$table->integer('mun_nu')->nullable()->index();
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
        Schema::drop('cep_localidade');
    }

}
