<?php

use Illuminate\Database\Seeder;

class LibraryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
        DB::table('libraries')->insert([
            'id'=> 1,
            'title' => 'Duo',
            'label' => 'SteepleChase',
            'release' => '19730402',
            'genre' => 'jazz',
            'ASIN' =>'',
            'user_id' => 1,
            'artist_id' => 1

        ]);
    }
    }
}
