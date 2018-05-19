<?php

use Illuminate\Database\Seeder;

class TuneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
        DB::table('tunes')->insert([
            'id'=> 1,
            'name' => 'I Skovens Dybe Syille Ro',
            'library_id' => 1,
            'composer' => 'Traditional',
        ]);
        DB::table('tunes')->insert([
            'id'=> 2,
            'name' => 'Come Summer',
            'library_id' => 1,
            'composer' => 'Kenny Drew',
        ]);
        DB::table('tunes')->insert([
            'id'=> 3,
            'name' => 'Lullaby',
            'library_id' => 1,
            'composer' => 'Niels-Henning Østed Pedersen',
        ]);
        DB::table('tunes')->insert([
            'id'=> 4,
            'name' => 'Kristune',
            'library_id' => 1,
            'composer' => 'Niels-Henning Østed Pedersen',
        ]);
        DB::table('tunes')->insert([
            'id'=> 5,
            'name' => 'Serenity',
            'library_id' => 1,
            'composer' => 'Kenny Drew',
        ]);
        DB::table('tunes')->insert([
            'id'=> 6,
            'name' =>'Det Var En Lørdag Aften',
            'library_id' => 1,
            'composer' => 'Traditional',
        ]);
        DB::table('tunes')->insert([
            'id'=> 7,
            'name' => 'Do You Know What It Means To Miss New Orleans',
            'library_id' => 1,
            'composer' => 'Louis Alter',
        ]);
        DB::table('tunes')->insert([
            'id'=> 8,
            'name' => 'Wave',
            'library_id' => 1,
            'composer' => 'Antonio Carlos Jobim',
        ]);
        DB::table('tunes')->insert([
            'id'=> 9,
            'name' => 'Duo Trip',
            'library_id' => 1,
            'composer' => 'Kenny Drew',
        ]);
        DB::table('tunes')->insert([
            'id'=> 10,
            'name' => 'Hush-A-Bye',
            'library_id' => 1,
            'composer' => 'Traditional',
        ]);
        DB::table('tunes')->insert([
            'id'=> 11,
            'name' => 'I Skovens Dybe Stille Ro',
            'library_id' => 1,
            'composer' => 'Traditional',
        ]);

    }
    }
}
