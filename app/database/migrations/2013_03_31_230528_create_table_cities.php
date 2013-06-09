<?php

use Illuminate\Database\Migrations\Migration;

class CreateTableCities extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cities', function($table) {
			$table->increments('id');
			$table->string('country_id',3);
			$table->string('state_id',16);
			$table->string('name');
			
			$table->timestamps();

			$table->index('country_id');
			$table->index('state_id');
			$table->index('name');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cities');
	}

}