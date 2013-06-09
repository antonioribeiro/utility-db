<?php

class CountriesTableSeeder extends Seeder {

	public function run()
	{
		$countries = array(
			array('id' => 'BR', 'name' => 'Brasil', 'created_at' => new DateTime, 'updated_at' => new DateTime),
			array('id' => 'US', 'name' => 'United States', 'created_at' => new DateTime, 'updated_at' => new DateTime),
		);

		DB::table('countries')->insert($countries);
	}

}
