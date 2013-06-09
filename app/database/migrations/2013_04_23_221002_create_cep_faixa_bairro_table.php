<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCepFaixaBairroTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cep_faixa_bairro', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('bai_nu')->nullable()->index();
			$table->string('fcb_cep_ini', 8)->nullable();
			$table->string('fcb_cep_fim', 8)->nullable();
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
        Schema::drop('cep_faixa_bairro');
    }

}
