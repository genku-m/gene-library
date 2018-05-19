<?php

use Illuminate\Database\Seeder;

class PlayerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
            'id'=> 1,
            'name' => 'Kenny Drew',
            'instrument' => 'Piano'
        ],
        [
            'id'=> 2,
            'name'=>'Niels-Henning Østed Pedersen',
            'instrument' => 'Bass'
        ],
        [
            'id'=> 3,
            'name'=>'Nils Winther',
            'instrument'=>'Guitar'
          ]);    }
}
