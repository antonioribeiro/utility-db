<?php

use Illuminate\Database\Migrations\Migration;

class CreateTableCountries extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('countries', function($table) {
			$table->string('id',3)->primary();
			$table->string('name');
			
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
		Schema::drop('countries');
	}

}