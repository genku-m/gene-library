<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    {
        DB::table('users')->insert([
            'name' => 'genku',
            'email' => 'gmish318@gmail.com',
            'password' => bcrypt('genku'),
        ]);
    }
    }
}
