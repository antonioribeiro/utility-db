<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCepVarBaiTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cep_var_bai', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('bai_nu')->nullable();
			$table->integer('vdb_nu')->nullable();
			$table->string('vdb_tx')->nullable();
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
        Schema::drop('cep_var_bai');
    }

}
