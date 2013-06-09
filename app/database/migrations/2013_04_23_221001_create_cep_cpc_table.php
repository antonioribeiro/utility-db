<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCepCpcTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cep_cpc', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('cpc_nu')->nullable();
			$table->string('ufe_sg', 2)->nullable()->index();
			$table->integer('loc_nu')->nullable()->index();
			$table->string('cpc_no')->nullable()->index();
			$table->string('cpc_endereco')->nullable()->index();
			$table->string('cep', 8)->nullable()->index();
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
        Schema::drop('cep_cpc');
    }

}
