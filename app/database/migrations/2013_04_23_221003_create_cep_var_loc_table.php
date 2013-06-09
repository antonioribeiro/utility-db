<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCepVarLocTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cep_var_loc', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('loc_nu')->nullable();
			$table->integer('val_nu')->nullable();
			$table->string('val_tx')->nullable();
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
        Schema::drop('cep_var_loc');
    }

}
