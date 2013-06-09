<?php

class GendersTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        // DB::table('genders')->delete();

        $genders = array(
            array('abbreviation' => 'M', 'name' => 'Masculino', 'created_at' => new DateTime, 'updated_at' => new DateTime),
            array('abbreviation' => 'F', 'name' => 'Feminino', 'created_at' => new DateTime, 'updated_at' => new DateTime),
        );

        DB::table('genders')->insert($genders);
    }

}