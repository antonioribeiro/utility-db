<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCepBairroTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cep_bairro', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('bai_nu')->nullable()->index();
			$table->string('ufe_sg', 2)->nullable()->index();
			$table->integer('loc_nu')->nullable()->index();
			$table->string('bai_no')->nullable()->index();
			$table->string('bai_no_abrev', 64)->nullable();
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
        Schema::drop('cep_bairro');
    }

}
