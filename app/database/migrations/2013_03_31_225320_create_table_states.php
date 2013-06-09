<?php

use Illuminate\Database\Migrations\Migration;

class CreateTableStates extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('states', function($table) {
			$table->string('id',16);
			$table->string('country_id',3);
			$table->string('name');
			$table->timestamps();

			$table->primary(array('id','country_id'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('states');
	}

}