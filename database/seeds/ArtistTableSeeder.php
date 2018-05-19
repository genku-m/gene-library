<?php

use Illuminate\Database\Seeder;

class ArtistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      {
        DB::table('artists')->insert([
            'id'=> 1,
            'name' => 'Kenny Drew and Niels-Henning Østed Pedersen',
            'instrument' => 'Piano and Bass',
        ]);
    }
    }
}
