<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCepGrandeUsuarioTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cep_grande_usuario', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('gru_nu')->nullable();
			$table->string('ufe_sg', 2)->nullable()->index();
			$table->integer('loc_nu')->nullable()->index();
			$table->integer('bai_nu')->nullable()->index();
			$table->integer('log_nu')->nullable();
			$table->string('gru_no')->nullable();
			$table->string('gru_endereco')->nullable();
			$table->string('cep', 8)->nullable()->index();
			$table->string('gru_no_abrev', 64)->nullable();
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
        Schema::drop('cep_grande_usuario');
    }

}
