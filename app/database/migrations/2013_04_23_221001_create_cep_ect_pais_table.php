<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCepEctPaisTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cep_ect_pais', function(Blueprint $table) {
            $table->increments('id');
            $table->string('pai_sg', 2)->nullable();
			$table->string('pai_sg_alternativa', 3)->nullable();
			$table->string('pai_no_portugues')->nullable();
			$table->string('pai_no_ingles')->nullable();
			$table->string('pai_no_frances')->nullable();
			$table->string('pai_abreviatura', 64)->nullable();
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
        Schema::drop('cep_ect_pais');
    }

}
