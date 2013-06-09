<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCepUnidOperTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cep_unid_oper', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('uop_nu')->nullable();
			$table->string('ufe_sg', 2)->nullable()->index();
			$table->integer('loc_nu')->nullable()->index();
			$table->integer('bai_nu')->nullable();
			$table->integer('log_nu')->nullable();
			$table->string('uop_no')->nullable();
			$table->string('uop_endereco')->nullable();
			$table->string('cep', 8)->nullable()->index();
			$table->string('uop_in_cp', 1)->nullable();
			$table->string('uop_no_abrev', 64)->nullable();
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
        Schema::drop('cep_unid_oper');
    }

}
