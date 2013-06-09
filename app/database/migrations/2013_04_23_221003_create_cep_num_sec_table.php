<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCepNumSecTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cep_num_sec', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('log_nu')->nullable();
			$table->string('sec_nu_ini', 10)->nullable();
			$table->string('sec_nu_fim', 10)->nullable();
			$table->string('sec_in_lado', 1)->nullable();
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
        Schema::drop('cep_num_sec');
    }

}
