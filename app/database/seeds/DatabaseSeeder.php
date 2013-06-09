<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('CepTableSeeder');

		$this->call('CountriesTableSeeder');
		$this->call('StatesTableSeeder');
		$this->call('CitiesTableSeeder');
		$this->call('ProductsTableSeeder');
		$this->call('ProductsCategoriesTableSeeder');
		$this->call('AgeGroupsTableSeeder');
		$this->call('BrandsTableSeeder');
		$this->call('CategoriesTableSeeder');
		$this->call('ColorsTableSeeder');
		$this->call('PricesLabelsTableSeeder');
		$this->call('SeasonsTableSeeder');
		$this->call('SizesTableSeeder');
		$this->call('UnitsTableSeeder');
		$this->call('FilesTypesTableSeeder');
		$this->call('GendersTableSeeder');
		
		$this->call('PaymentServicesSeeder');
		$this->call('PaymentServicesStatusesSeeder');

		$this->call('SystemClassesTableSeeder');
		$this->call('ServicesTypesTableSeeder');
		$this->call('EnterprisesTableSeeder');
		$this->call('ServicesTableSeeder');

		$this->call('ServicesStatusesTableSeeder');


	}

}