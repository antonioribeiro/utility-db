<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCepVarLogTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cep_var_log', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('log_nu')->nullable();
			$table->integer('vlo_nu')->nullable();
			$table->string('tlo_tx')->nullable();
			$table->string('vlo_tx')->nullable();
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
        Schema::drop('cep_var_log');
    }

}
