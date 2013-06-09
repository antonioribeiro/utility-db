<?php

class StatesTableSeeder extends Seeder {

	public function run()
	{
		$states = array(

						array('country_id' => 'BR', 'id' => 'AC', 'name' => 'Acre', 'created_at' => new DateTime, 'updated_at' => new DateTime),
						array('country_id' => 'BR', 'id' => 'AL', 'name' => 'Alagoas', 'created_at' => new DateTime, 'updated_at' => new DateTime),
						array('country_id' => 'BR', 'id' => 'AP', 'name' => 'Amapá', 'created_at' => new DateTime, 'updated_at' => new DateTime),
						array('country_id' => 'BR', 'id' => 'AM', 'name' => 'Amazonas', 'created_at' => new DateTime, 'updated_at' => new DateTime),
						array('country_id' => 'BR', 'id' => 'BA', 'name' => 'Bahia', 'created_at' => new DateTime, 'updated_at' => new DateTime),
						array('country_id' => 'BR', 'id' => 'CE', 'name' => 'Ceará', 'created_at' => new DateTime, 'updated_at' => new DateTime),
						array('country_id' => 'BR', 'id' => 'DF', 'name' => 'Distrito Federal', 'created_at' => new DateTime, 'updated_at' => new DateTime),
						array('country_id' => 'BR', 'id' => 'ES', 'name' => 'Espírito Santo', 'created_at' => new DateTime, 'updated_at' => new DateTime),
						array('country_id' => 'BR', 'id' => 'GO', 'name' => 'Goiás', 'created_at' => new DateTime, 'updated_at' => new DateTime),
						array('country_id' => 'BR', 'id' => 'MA', 'name' => 'Maranhão', 'created_at' => new DateTime, 'updated_at' => new DateTime),
						array('country_id' => 'BR', 'id' => 'MT', 'name' => 'Mato Grosso', 'created_at' => new DateTime, 'updated_at' => new DateTime),
						array('country_id' => 'BR', 'id' => 'MS', 'name' => 'Mato Grosso do Sul', 'created_at' => new DateTime, 'updated_at' => new DateTime),
						array('country_id' => 'BR', 'id' => 'MG', 'name' => 'Minas Gerais', 'created_at' => new DateTime, 'updated_at' => new DateTime),
						array('country_id' => 'BR', 'id' => 'PA', 'name' => 'Pará', 'created_at' => new DateTime, 'updated_at' => new DateTime),
						array('country_id' => 'BR', 'id' => 'PB', 'name' => 'Paraíba', 'created_at' => new DateTime, 'updated_at' => new DateTime),
						array('country_id' => 'BR', 'id' => 'PR', 'name' => 'Paraná', 'created_at' => new DateTime, 'updated_at' => new DateTime),
						array('country_id' => 'BR', 'id' => 'PE', 'name' => 'Pernambuco', 'created_at' => new DateTime, 'updated_at' => new DateTime),
						array('country_id' => 'BR', 'id' => 'PI', 'name' => 'Piauí', 'created_at' => new DateTime, 'updated_at' => new DateTime),
						array('country_id' => 'BR', 'id' => 'RR', 'name' => 'Roraima', 'created_at' => new DateTime, 'updated_at' => new DateTime),
						array('country_id' => 'BR', 'id' => 'RO', 'name' => 'Rondônia', 'created_at' => new DateTime, 'updated_at' => new DateTime),
						array('country_id' => 'BR', 'id' => 'RJ', 'name' => 'Rio de Janeiro', 'created_at' => new DateTime, 'updated_at' => new DateTime),
						array('country_id' => 'BR', 'id' => 'RN', 'name' => 'Rio Grande do Norte', 'created_at' => new DateTime, 'updated_at' => new DateTime),
						array('country_id' => 'BR', 'id' => 'RS', 'name' => 'Rio Grande do Sul', 'created_at' => new DateTime, 'updated_at' => new DateTime),
						array('country_id' => 'BR', 'id' => 'SC', 'name' => 'Santa Catarina', 'created_at' => new DateTime, 'updated_at' => new DateTime),
						array('country_id' => 'BR', 'id' => 'SP', 'name' => 'São Paulo', 'created_at' => new DateTime, 'updated_at' => new DateTime),
						array('country_id' => 'BR', 'id' => 'SE', 'name' => 'Sergipe', 'created_at' => new DateTime, 'updated_at' => new DateTime),
						array('country_id' => 'BR', 'id' => 'TO', 'name' => 'Tocantins', 'created_at' => new DateTime, 'updated_at' => new DateTime),
		);

		DB::table('states')->insert($states);
	}

}
